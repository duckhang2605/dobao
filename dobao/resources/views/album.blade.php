@extends('layouts.layout4')
@section('title', 'Âm nhạc')
@section('music_menu', 'c-menu_item-active')
@section('home-active', 'c-menu-c_item-active')
@section('image', $album->thumb_url)

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row audio-player"> 
                <div class="col-md-12">
                    <h2 class="song-name">{{ $currentSong->name }}</h2>
                    <div class="audio-info">
                        <span class="tacgia">{{ $currentSong->author }}</span></span>
                        <span class="separator">•</span>
                        <span class="song-album">@if (isset($currentSong->albums[0]->name)){{ $currentSong->albums[0]->name }} @endif</span></span>
                        {{--<span class="separator">•</span>--}}
                        {{--<span class="type">Thể loại: Nhạc trữ tình</span>--}}
                        <input type="hidden" class="song-id" value="{{ $currentSong->id }}">
                    </div>
                    <div class="audio-control">
                        <div id="jquery_jplayer_1" class="jp-jplayer"></div>
                        <div id="jp_container_1" class="jp-audio" role="application" aria-label="media player">
                            <div class="jp-type-playlist">
                                <div class="jp-gui jp-interface">
                                <div class="row">
                                        <div class="col-lg-3 col-md-3 col-xs-3">
                                        <div class="jp-controls">
										<img src="{{asset('img/skip-back.svg')}}" class="jp-previous" aria-hidden="true">
										<img class="jp-play" src="{{asset('img/play.svg')}}" aria-hidden="true">
										<img class="jp-pause" src="{{asset('img/pause.svg')}}" aria-hidden="true" style="display: none;">
										<img src="{{asset('img/skip-forward.svg')}}" class="jp-next" aria-hidden="true">
									    </div>
                                        </div>
                                        <div class="col-lg-7 col-md-6 col-xs-9">
                                            <div class="time-left">
                                                <div class="jp-current-time" role="timer" aria-label="time">&nbsp;</div>
                                            </div>
                                            <div class="time-right">
                                                <div class="jp-duration" role="timer" aria-label="duration">&nbsp;</div>
                                            </div>
                                            <div class="audio-progress">
                                                <div class="jp-progress" >
                                                    <div class="jp-seek-bar">
                                                        <div class="jp-play-bar"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-3 col-xs-3 hidden-xs">
                                            <div class="row jp-volume-controls">
                                                <div class="volume">
                                                <img src="{{asset('img/volume-1.svg')}}" class=" fa-volume-off jp-mute" aria-hidden="true" style="display: none;">
										        <img src="{{asset('img/volume-2.svg')}}" class=" fa-volume-up  jp-mute" aria-hidden="true">
                                                </div>
                                                <div class="shuffle">
                                                    <img src="{{asset('img/shuffle.svg')}}" class="jp-shuffle no" aria-hidden="true">
										            <img src="{{asset('img/shuffled.svg')}}" class="jp-shuffle yes" aria-hidden="true">
                                                </div>
                                                <div class="repeat">
                                                    <img src="{{asset('img/repeat.svg')}}" class="jp-repeat none" aria-hidden="true">
                                                    <img src="{{asset('img/repeated.svg')}}" class="jp-repeat no-none" aria-hidden="true">
                                                </div>
                                                <div class="jp-volume-bar">
                                                    <div class="jp-volume-bar-value"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="jp-playlist" style="display: none;">
                                    <ul>
                                        <li>&nbsp;</li>
                                    </ul>
                                </div>
                                <div class="jp-no-solution">
                                    <span>Update Required</span>
                                    To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="audio-info">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- Het phan play nhac -->
<div class="music">
<div class="container">
    <div class="row">
    <div class="col-md-3">
                <h2 class="media-title">Bài nhạc |
                    <a href="{{ route('music', ['play' => true]) }}" class="pull-right">
                        <img src="{{ asset('img/mix.png') }}" alt="">
                    </a>
                </h2>
                <div class="media-container song-container">
                    <ul class="song-list">
                        @foreach ($songs as $song)
                            <li @if($currentSong->id == $song->id) class="active" @endif>
                                <a href="{{ route('music.show', ['id' => $song->id, 'title' => vietnamese_url($song->name)]) }}">
                                <img src="{{ asset('img/music_song.png') }}" alt="">
                                    <div class="list-song-detail">
                                    <span>{{ $song->name }}</span>
                                    <br>
                                    <span class="author">{{ $song->performer }}</span>
                                    </div>
                                    
                                </a>
                                <span class="song-duration-time pull-right"></span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        <div class="col-md-9">
            <h2 class="media-title">Album</h2>
            <div class="media-container album-container">
                <div><a href="{{ route('music') }}" class="back"><i class="fa fa-arrow-left"></i></a> </div>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ $album->thumb_url }}" class="img-responsive">
                    </div>
                    <div class="col-md-8">
                        <h3 class="album-name">{{ $album->name }}</h3>
                        <h5 class="album-author">{{ $album->performer }}</h5>
                        <div class="album-desc">
                            {{ $album->description }}
                        </div>
                    </div>
                </div>
                <div class="album-control">
                    <a href="#" class="active">Nghe cả album</a> |
                    <a href="#" class="shuffle-playlist"><img src="{{ asset('img/mix.png') }}" alt="" aria-hidden="true"></a>
                </div>
                <hr>
                <ul class="song-list">
                    @php $i = 0 @endphp
                    @foreach ($songAlbumData as $song)
                    <li class="album-song song-{{ $song->id }}">
                        <a href="{{ route('album.show', ['id' => $album->id, 'title' => vietnamese_url($album->name), 'st' => $i]) }}" data-song="{{ $i }}">
                            <img src="{{ asset('img/music_song.png') }}" alt="" aria-hidden="true">
                            <span>{{ $song->name }}</span>
                        </a>
                        <br>
                        <span style="padding-left:15px; color: #ffffff;font-family: Roboto;font-weight: 400;opacity:0.3;">{{ $song->performer }}</span>
                        <span class="song-duration-time pull-right"></span>
                    </li>
                    @php $i++ @endphp
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <div class="row" id="video-content">
        <div class="col-md-12">
            <h2 class="media-title">Danh sách Video</h2>
            <div class="media-container video-container">
                @foreach(array_chunk($videos, 3) as $videoChunk)
                <div class="row">
                    @foreach($videoChunk as $video)
                    <div class="col-md-4">
                        <div class="video-image">
                            <a href="javascript:void(0)" data-url="{{ $video->video_url }}"><img src="{{ $video->thumb_url }}" class="img-responsive" width="100%"></a>
                            <div class="video-control">
                                <i class="fa fa-play fa-fw" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="video-title">
                            <a href="javascript:void(0)" data-url="{{ $video->video_url }}">{{ $video->name }}</a>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
</div>
<div class="video-player">
    <div class="container">
        <div class="pull-right">Đóng <i class="fa fa-times fa-2x" aria-hidden="true"></i></div>
        <div class="video-iframe"><iframe src="" frameborder="0" allowfullscreen></iframe></div>
    </div>
</div>

@endsection()

@section('inline_scripts')
<script src="{{ asset('js/jquery.nicescroll.min.js') }}"></script>
<script>
    var songs = $.parseJSON('{!! $currentPlaylist !!}');

    var jplayer = new jPlayerPlaylist({
        jPlayer: "#jquery_jplayer_1",
        cssSelectorAncestor: "#jp_container_1"
    }, songs, {
        playlistOptions: {
            autoPlay: true
        },
        swfPath: "../../dist/jplayer",
        supplied: "mp3",
        wmode: "window",
        useStateClassSkin: true,
        autoBlur: false,
        smoothPlayBar: true,
        keyEnabled: false,
        play: function(index) {
            $('.song-name').text(index.jPlayer.status.media.title);
            $('.song-author').text(index.jPlayer.status.media.author);
            $('.song-album').text(index.jPlayer.status.media.album);
            $('.song-id').val(index.jPlayer.status.media.id);

            if (index.jPlayer.status.media.image) {
                $('.song-image').attr('src', index.jPlayer.status.media.image);
            } else {
                $('.song-image').attr('src', '{{ asset('img/audio-image.png') }}');
            }

            $('.album-song').removeClass('active');
            $('.song-' + index.jPlayer.status.media.id).addClass('active');

        }
    });

    $(function() {
        $(".song-container").niceScroll({cursorcolor:"#efb479", cursorwidth: "10px"});
        $(".album-container").niceScroll({cursorcolor:"#efb479", cursorwidth: "10px"});
        $(".video-container").niceScroll({cursorcolor:"#efb479", cursorwidth: "10px"});

        $(document).on('click', '.video-container a', function() {
            var url = $(this).data('url');
            var urlReplace = url.replace("watch?v=", "embed/");
            $(".video-player .video-iframe").html('<iframe src="' + urlReplace + '" frameborder="0" allowfullscreen></iframe>');
            $('.video-player').show();
            jplayer.pause();
        });

        $(document).on('click', '.video-player', function() {
            $('.video-player').hide();
            $('iframe').attr('src', $('iframe').attr('src'));
        });

        $(document).on('click', '.video-player iframe', function(event) {
            event.stopPropagation();
        });

        $(document).on('click', '.shuffle-playlist', function() {
            if ($(this).hasClass('active')) {
                $(this).removeClass('active');
            } else {
                $(this).addClass('active');
            }
            jplayer.shuffle();
        });

        $(document).on('click', '.share-social', function(event) {
            var url = '{{ route('music') }}' + '/share/' + $('.song-id').val();

            if ($(this).hasClass('fb-share')) {
                window.open("https://www.facebook.com/sharer/sharer.php?u=" + url, "pop", "width=600, height=400, scrollbars=no");
            } else if($(this).hasClass('gg-share')) {
                window.open("https://plus.google.com/share?url=" + url, "pop", "width=600, height=400, scrollbars=no");
            } else if ($(this).hasClass('tw-share')) {
                window.open("http://twitter.com/home?status=title+" + url, "pop", "width=600, height=400, scrollbars=no");
            };

        });

        $(document).on('click', '.album-song a', function(event) {
            event.preventDefault();
            jplayer.play($(this).data('song'));
            history.pushState(null, null, $(this).attr('href'));
        });

    });
</script>
@endsection()
