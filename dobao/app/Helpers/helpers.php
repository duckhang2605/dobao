<?php
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

const BASE_API = 'https://api.music.zilack.com/';
const CONTENT_ID = '20170510';
const IS_PUBLIC = '1';

if (!function_exists('urlGenerator')) {
    /**
     * @return \Laravel\Lumen\Routing\UrlGenerator
     */
    function urlGenerator() {
        return new \Laravel\Lumen\Routing\UrlGenerator(app());
    }
}

if (!function_exists('asset')) {
    /**
     * @param $path
     * @param bool $secured
     *
     * @return string
     */
    function asset($path, $secured = false) {
        return urlGenerator()->asset($path, $secured);
    }
}

if (!function_exists('get_songs')) {
    /**
     *
     * @return json
     */
    function get_songs($limit = null, $feature = false) {
        $songs = [];
        $client = new GuzzleHttp\Client();

        $data = [
            'content_id' => CONTENT_ID,
            'is_public' => IS_PUBLIC,
            'limit' => $limit,
            'includes' => 'albums'
        ];

        if ($feature) {
            $data['is_feature'] = 1;
        }

        $request = $client->request('GET', BASE_API . 'song', ['query' => $data]);

        $result = json_decode($request->getBody());

        if (isset($result->data) && !empty($result->data)) {
            foreach ($result->data as $song) {
                $songs[] = [
                    'title' => $song->name,
                    'mp3' => $song->file128,
                    'author' => $song->author,
                    'album' => isset($song->albums[0]->name) ? $song->albums[0]->name : '',
                    'image' => $song->thumb_url,
                    'id' => $song->id
                ];
            }
        }

        return json_encode($songs);

    }
}

if (!function_exists('get_info')) {
    /**
     *
     * @return object
     */
    function get_info() {
        $client = new GuzzleHttp\Client();
        $request = $client->request('GET', BASE_API . 'website/' . CONTENT_ID . '/content/bio');

        $result = json_decode($request->getBody());

        return $result->data;
    }
}

if (!function_exists('get_list_news')) {
    /**
     *
     * @return array
     */
    function get_list_news($page) {
        $client = new GuzzleHttp\Client();

        $data = [
            'content_id' => CONTENT_ID,
            'page' => $page,
            'limit' => 5
        ];

        $request = $client->request('GET', BASE_API . 'news', ['query' => $data]);

        $result = json_decode($request->getBody());

        return $result->data;
    }
}

if (!function_exists('get_count_news')) {
    /**
     *
     * @return array
     */
    function get_count_news() {
        $client = new GuzzleHttp\Client();

        $data = [
            'content_id' => CONTENT_ID,
        ];

        $request = $client->request('GET', BASE_API . 'news', ['query' => $data]);

        $result = json_decode($request->getBody());

        return count($result->data);
    }
}

if (!function_exists('get_news')) {
    /**
     *
     * @return array
     */
    function get_news($id) {
        $client = new GuzzleHttp\Client();

        $request = $client->request('GET', BASE_API . 'news/' . $id);

        $result = json_decode($request->getBody());

        return $result->data;
    }
}

if (!function_exists('get_list_photos')) {
    /**
     *
     * @return array
     */
    function get_list_photos() {
        $photos = [];
        $client = new GuzzleHttp\Client();

        $data = [
            'content_id' => CONTENT_ID,
        ];

        $request = $client->request('GET', BASE_API . 'photo', ['query' => $data]);

        $result = json_decode($request->getBody());

        if (isset($result->data) && !empty($result->data)) {
            $photos[0] = $result->data;
            foreach ($result->data as $photo) {
                if ($photo->category) {
                    if (isset ($photos[$photo->category])) {
                        $photos[$photo->category][] = $photo;
                    } else {
                        $photos[$photo->category] = [$photo];
                    }
                }
            }
        }

        return $photos;
    }
}

if (!function_exists('get_list_shows')) {
    /**
     *
     * @return array
     */
    function get_list_shows() {
        $shows = [
            '0' => [],
            '1' => []
        ];
        $client = new GuzzleHttp\Client();

        $data = [
            'content_id' => CONTENT_ID,
        ];

        $request = $client->request('GET', BASE_API . 'show', ['query' => $data]);

        $result = json_decode($request->getBody());
        if (isset($result->data) && !empty($result->data)) {
            foreach ($result->data as $show) {
                if ($show->status) {
                    if ($show->status != 3) {
                        $shows['0'][] = $show;
                    } else {
                        $shows['1'][] = $show;
                    }
                }
            }
        }

        return $shows;
    }
}

if (!function_exists('get_list_songs')) {
    /**
     *
     * @return array
     */
    function get_list_songs() {
        $songs = [];
        $client = new GuzzleHttp\Client();

        $data = [
            'content_id' => CONTENT_ID,
            'is_public' => IS_PUBLIC,
            'includes' => 'albums'
        ];

        $request = $client->request('GET', BASE_API . 'song', ['query' => $data]);

        $result = json_decode($request->getBody());

        return $result->data;

    }
}

if (!function_exists('get_song')) {
    /**
     *
     * @return object
     */
    function get_song($id) {
        $client = new GuzzleHttp\Client();

        $request = $client->request('GET', BASE_API . 'song/' . $id);

        $result = json_decode($request->getBody());

        return $result->data;

    }
}

if (!function_exists('get_list_albums')) {
    /**
     *
     * @return array
     */
    function get_list_albums() {
        $client = new GuzzleHttp\Client();
        $data = [
            'content_id' => CONTENT_ID,
            'is_public' => IS_PUBLIC,
        ];

        $request = $client->request('GET', BASE_API . 'album', ['query' => $data]);

        $result = json_decode($request->getBody());

        return $result->data;

    }
}

if (!function_exists('get_album')) {
    /**
     *
     * @return object
     */
    function get_album($id) {
        $client = new GuzzleHttp\Client();

        $data = [
            'includes' => 'songs',
        ];

        $request = $client->request('GET', BASE_API . 'album/' . $id, ['query' => $data]);

        $result = json_decode($request->getBody());

        return $result->data;

    }
}

if (!function_exists('get_list_videos')) {
    /**
     *
     * @return array
     */
    function get_list_videos() {
        $songs = [];
        $client = new GuzzleHttp\Client();

        $data = [
            'content_id' => CONTENT_ID,
            'is_public' => IS_PUBLIC,
        ];

        $request = $client->request('GET', BASE_API . 'video', ['query' => $data]);

        $result = json_decode($request->getBody());

        return $result->data;

    }
}

if (!function_exists('search_data')) {
    /**
     *
     * @return object
     */
    function search_data($keyword = null) {
        $client = new GuzzleHttp\Client();

        $data = [
            'content_id' => CONTENT_ID,
            'keyword' => $keyword,
        ];

        $request = $client->request('GET', BASE_API . 'search/', ['query' => $data]);
        $result = json_decode($request->getBody());
        return $result->data;
    }
}
if (!function_exists('login')) {
    /**
     *
     * @return object
     */
    function login($sec_name = null,$sec_pass =  null) {
        $client = new GuzzleHttp\Client();
        $headers = [
    
    'Accept' => 'application/json'

];
        $data = [
            'sec_name' => $sec_name,
            'sec_pass' => $sec_pass,
        ];
        try {
            $request = $client->request('POST', BASE_API . 'auth/login?app_id=3',['headers' => [ 'Content-Type' => 'application/json' ],'body' => json_encode($data)]);
            $result['data'] = json_decode($request->getBody())->data;
            $result['code'] = 200; // code = 200 login successfull
        } catch (Exception $e) {
            $result['code'] = $e->getCode(); // code = 422 require email or password, 
        }
        return $result;
    }
}

if (!function_exists('vietnamese_url')) {
    function vietnamese_url($str) {
        $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", "a", $str);
        $str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", "e", $str);
        $str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", "i", $str);
        $str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", "o", $str);
        $str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", "u", $str);
        $str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", "y", $str);
        $str = preg_replace("/(đ)/", "d", $str);
        $str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", "A", $str);
        $str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", "E", $str);
        $str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", "I", $str);
        $str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", "O", $str);
        $str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", "U", $str);
        $str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", "Y", $str);
        $str = preg_replace("/(Đ)/", "D", $str);
        $str = str_replace(" ", "-", str_replace("&*#39;","",$str));

        return $str;
    }
}

if (!function_exists('array_rotate')) {
    function array_rotate(array $array, $count) {
        for ($turn = 1; $turn <= $count; $turn++) {
            array_push($array, array_shift($array));
        }

        return $array;
    }
}
