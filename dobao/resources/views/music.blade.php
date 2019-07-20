@extends('layouts.layout4')

@php
$str = $currentSong->lyrics;
$pattern = '/\[(\w+)\]/';
$replacement = '';
$lyric = preg_replace($pattern, $replacement, $str);
$thumb=$currentSong->thumb_url;
$description = (isset($currentSong->albums[0]->name)) ? 'Album: ' . $currentSong->albums[0]->name : '';
$description .=  ' | ' . $lyric;
@endphp

@section('title', $currentSong->name)
@section('description', $description)
@section('image', $thumb)
@section('music_menu', 'c-menu_item-active')
@section('music-active', 'c-menu-c_item-active')
@section('content')
@if (!empty($songs) || !empty($albums) || !empty($videos))		
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
                                                <div class="repeat">
                                                    <img src="{{asset('img/repeat.svg')}}" class="jp-repeat none" aria-hidden="true">
                                                    <img src="{{asset('img/repeated.svg')}}" class="jp-repeat no-none" aria-hidden="true">
                                                </div>
                                                <div class="shuffle">
                                                    <img src="{{asset('img/shuffle.svg')}}" class="jp-shuffle no" aria-hidden="true">
										            <img src="{{asset('img/shuffled.svg')}}" class="jp-shuffle yes" aria-hidden="true">
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
 </div>
 </div><!-- Het phan play nhac -->
<div class="music">
<div class="container">
    <div class="row">
    <div class="col-md-3 view_list_songs">
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
        <!-- Video -->
        <div class="col-md-9 set_width_video">
            <h2 class="media-title">Videos</h2>
            <div class="media-container video-container">
                @foreach(array_chunk($videos, 3) as $videoChunk)

                    @foreach($videoChunk as $video)
                        <div class="khoivideo">
                        <div class="video-image">
                            <a href="javascript:void(0)" data-url="{{ $video->video_url }}"><img src="{{ $video->thumb_url }}" class="img-responsive" width="100%"></a>
                        </div>
                        <div class="video-title">
                            <a href="javascript:void(0)" data-url="{{ $video->video_url }}">{{ $video->name }}</a>
                        </div>
                        <div class="video-author">
                            <span>{{ $video->performer }}</a>
                        </div>
                        </div>
                    @endforeach

                @endforeach
            </div>
        </div>
        <!-- Het vieo -->
        <div class="container">
                    <div class="col-md-12 download-container">
                        <div class="download-music-title">
                        <h3> Tải ứng dụng</h3>
                        <br>
                        <span id="nghenhcoff">Nghe nhạc offline, cập nhật tin tức mới nhất từ nhạc sĩ Đỗ Bảo</span>
                        </div>
                        <div class="download-are-music">
                        @include('layouts.partials.download')
                        </div>
                    </div>
            </div>
        <div class="col-md-12">
            <h2 class="media-title">Albums</h2>
            <div class="media-container album-container">
                @foreach(array_chunk($albums, 3) as $albumChunk)
                <div class="row">
                    @foreach($albumChunk as $album)
                    <div class="col-lg-4 col-md-4 col-ms-4 col-xs-12">
                        <div class="album-image">
                            <a href="{{ route('album.show', ['id' => $album->id, 'title' => vietnamese_url($album->name)]) }}"><img src="{{ $album->thumb_url }}" class="img-responsive" width="100%"></a>
                        </div>
                        <div class="album-title">
                            <a href="{{ route('album.show', ['id' => $album->id, 'title' => vietnamese_url($album->name)]) }}">{{ $album->name }}</a>
                        </div>
                        <div class="album-author">
                            <span>{{ $album->performer }}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endforeach
            </div>
    </div>
</div><!-- </div> Het album -->

<div class="video-player">
    <div class="container">
        <div class="pull-right">Đóng <i class="fa fa-times fa-2x" aria-hidden="true"></i></div>
        <div class="video-iframe"><iframe src="" frameborder="0" allowfullscreen></iframe></div>
    </div>
</div>
@else
<div class="container" style="min-height: 600px;text-align: center; font-size: 40px;padding-top: 40px;"><p>Không tìm thấy dữ liệu nào phù hợp yêu cầu</p></div>
@endif
@endsection()
</div>
@section('inline_scripts')
<script src="{{ asset('js/jquery.nicescroll.min.js') }}"></script>
<script>
    var play = '{{ $play }}';
    var currentIndex = 0;
    try {
        var curr = '{{$current_index}}';
        currentIndex = parseInt(curr,10);
    } catch (error) {
        console.log(error);
    }
    var autoPlay = (play == '1') ? true : false;
    var songJson = $.parseJSON('{!! $songJson !!}');
    var jplayer = new jPlayerPlaylist({
        jPlayer: "#jquery_jplayer_1",
        cssSelectorAncestor: "#jp_container_1"
    }, songJson, {
        playlistOptions: {
            autoPlay: autoPlay
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
            $('.tacgia').text(index.jPlayer.status.media.author);
            $('.song-album').text(index.jPlayer.status.media.album);
            $('.song-id').val(index.jPlayer.status.media.id);

            if (index.jPlayer.status.media.image) {
                $('.song-image').attr('src', index.jPlayer.status.media.image);
            } else {
                $('.song-image').attr('src', '{{ asset('img/audio-image.png') }}');
            }
        }
    });

    jplayer.current = currentIndex;

    $('.song-container').animate({
     scrollTop: $(".song-container .active").offset().top - $(".song-container").offset().top
 }, 0);
    
    $(document).ready(function(){
        $(function() {
            $(".song-container").niceScroll({cursorcolor:"#efb479", cursorwidth: "10px"});
            $(".album-container").niceScroll({cursorcolor:"#efb479", cursorwidth: "10px"});
            $(".video-container").niceScroll({cursorcolor:"#efb479", cursorwidth: "10px"});
        });

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
        $(document).on('click', '.jp-shuffle.no', function() {
			$(".no").css('display','none');
			$(".yes").css('display','inline-block');
			});
			$(document).on('click', '.jp-shuffle.yes', function() {
			$(".no").css('display','inline-block');
			$(".yes").css('display','none');
			});
			$(document).on('click', '.jp-repeat.none', function() {
			$(".none").css('display','none');
			$(".no-none").css('display','inline-block');
			});
			$(document).on('click', '.jp-repeat.no-none', function() {
			$(".none").css('display','inline-block');
			$(".no-none").css('display','none');
			});
    });
</script>
@endsection()
