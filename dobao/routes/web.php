<?php

use Illuminate\Http\Request;
use Carbon\Carbon;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', ['as' => 'home', function (Request $request) use ($app) {
    $songs = get_songs(10,true);
    $albums=get_list_albums();
    $info = get_info();
    $status = $request->input('status') ? $request->input('status') : 0;
    // $login = session('login');
    // print_r( $login);
    return view('homepage', compact('songs','albums','info', 'status'));
}]);
$app->get('webview-ts',function () use ($app) {
   
    return view('webview-ts');
});
$app->get('demomodal',function () use ($app) {
   
    return view('l');
});
$app->get('/info', ['as' => 'info', function () use ($app) {
    $info = get_info();
    return view('info', compact('info'));
}]);

$app->get('/news', ['as' => 'news', function (Request $request) use ($app) {
    $page = $request->input('page') ? $request->input('page') : 1;
    $total = get_count_news();
    $news = get_list_news($page);
    $pageNumber = ceil($total/5);

    return view('news', compact('news', 'pageNumber', 'page'));
}]);

$app->get('/news/{title}/{id}', ['as' => 'news.show', function ($id) use ($app) {
    $news = get_news($id);
    return view('news_info', compact('news'));
}]);

$app->get('/photo', ['as' => 'photo', function () use ($app) {
    $photos = get_list_photos();
    $categories = [
        '0' => 'Tất cả',
        '1' => 'Ảnh Tư Liệu',
        '2' => 'Ảnh Sự Kiện',
        '3' => 'Ảnh Nghệ Thuật',
        '4' => 'Ảnh Fan'
    ];

    return view('photo', compact('photos', 'categories'));
}]);

$app->get('/show', ['as' => 'show', function () use ($app) {
    $shows = get_list_shows();
    $process = [
        '0' => 'Sắp diễn ra',
        '1' => 'Đã diễn ra',
    ];
    $current_date_time = Carbon::now()->toDateTimeString('Y-m-d H:i:s');
    return view('show', compact('shows', 'process','current_date_time'));
}]);

$app->get('/contact', ['as' => 'contact', function () use ($app) {
    $info = get_info();
    return view('contact', compact('info'));
}]);

$app->get('/download', ['as' => 'download', function () use ($app) {
    return view('download');
}]);

$app->get('/music', ['as' => 'music', function (Request $request) use ($app) {
    $songs = get_list_songs();
    $albums = get_list_albums();
    $videos = get_list_videos();
    $currentSong = $songs[0];
    $current_index = 0;
    $songJson = get_songs();
    $play = 0;

    return view('music', compact('songs', 'songJson', 'currentSong', 'albums', 'videos', 'play', 'current_index'));
}]);
$app->get('/music/{title}/{id}', ['as' => 'music.show', function ($id) use ($app) {
    $songs = get_list_songs();
    $albums = get_list_albums();
    $videos = get_list_videos();
    $current_index = 0;
    foreach($songs as $idx=>$aSong) {
        if($aSong->id == $id) {
            $current_index = $idx;
            break;
        }
    }
    $currentSong = $songs[$current_index];
    $songJson = get_songs();

    $play = 1;

    return view('music', compact('songs', 'songJson', 'currentSong', 'albums', 'videos', 'play', 'current_index'));
}]);

$app->get('/album/{title}/{id}', ['as' => 'album.show', function ($id) use ($app) {
    $songs = get_list_songs();
    $album = get_album($id);
    $videos = get_list_videos();
    $currentSong = (object) [
        'thumb_url' => '',
        'name' => '',
        'author' => '',
        'id' => ''
    ];
    $play = 1;

    $songAlbum = [];
    $songAlbumData = [];
    if ($album->songs) {
        $currentSong = $album->songs[0];
        $songAlbumData = $album->songs;
        foreach ($album->songs as $song) {
            $songAlbum[] = [
                'title' => $song->name,
                'mp3' => $song->file128,
                'author' => $song->author,
                'album' => $album->name,
                'image' => $song->thumb_url,
                'id' => $song->id
            ];
        }
    }

    $songJson = json_encode($songAlbum);
    $currentPlaylist = json_encode(array_rotate($songAlbum, (int) app('request')->input('st')));

    return view('album', compact('songs', 'songJson', 'currentSong', 'songAlbumData', 'currentPlaylist', 'album', 'videos', 'play'));
}]);

$app->get('/search', ['as' => 'search', function (Request $request) use ($app) {
    $keyword = $request->input('keyword') ? $request->input('keyword') : '';
    $data = search_data($keyword);
    $songs = $data->songs;
    $albums = $data->albums;
    $videos = $data->videos;
    $currentSong = (object) [
        'thumb_url' => '',
        'name' => '',
        'author' => '',
        'id' => '',
        'lyrics' => '',
    ];
    $play = '';

    $songAlbum = [];
    if ($songs) {
        $currentSong = $songs[0];
        $i = 0;
        foreach ($songs as $song) {
            if ($i > 40) {
                break;
            }

            $songAlbum[] = [
                'title' => $song->name,
                'mp3' => $song->file128,
                'author' => $song->author,
                'album' => isset($currentSong->albums[0]->name) ? $currentSong->albums[0]->name : '',
                'image' => $song->thumb_url,
                'id' => $song->id,
                'performer'=>$song->performer
            ];
            $i++;
        }
    }
    $songJson = json_encode($songAlbum);
    $current_index = 0;
    return view('music', compact('songs', 'songJson', 'currentSong', 'albums', 'videos', 'play', 'keyword', 'current_index'));
}]);
$app->get('/suggestion', ['as' => 'suggestion', function (Request $request) use ($app) {
    $keyword = $request->input('keyword') ? $request->input('keyword') : '';
    $data = search_data($keyword);
    $songs = $data->songs;
    $albums = $data->albums;
    $videos = $data->videos;
    $songAlbum = [];
    if ($songs) {
        foreach ($songs as $song) {
            $songAlbum[] = [
                'title' => $song->name,
                'mp3' => $song->file128,
                'author' => $song->author,
                'album' => isset($currentSong->albums[0]->name) ? $currentSong->albums[0]->name : '',
                'image' => $song->thumb_url,
                'id' => $song->id,
                'performer'=>$song->performer
            ];
        }
    }
    $songJson =json_encode($songAlbum);
    $current_index = 0;
}]);
$app->get('/mobile', ['as' => 'mobile', function (Request $request) use ($app) {
    
    return view('download-require');
}]);

$app->post('/login', ['as' => 'login', function (Request $request) use ($app) {
    $secname = $request->input('email');
    $secpass = $request->input('pass');
    $ketqua=login($secname,$secpass);
    // code = 200 dang nhap thanh cong
    if($ketqua['code'] == 200){
        
       return redirect()->route('home');
    // code = 401 tai khoan mat khau khong dung
    }elseif ($ketqua['code'] == 401) {
        $errors = "Tài khoản hoặc mật khẩu không đúng!";
        return redirect()->route('home', ['status' => $errors]);
        // return redirect('dashboard')->with('status', 'Profile updated!');
    // code = 422 chu nhap tai khoan hoac mat khau
    }else{
        $errors = "Vui lòng điền tài khoản hoặc mật khẩu!";
        return redirect()->route('home', ['status' => $errors]);
    }
}]);



  