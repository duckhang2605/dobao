<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Nhạc Sĩ Đỗ Bảo</title>
    <meta name="description" content="Website chính thức của nhạc sĩ Đỗ Bảo">
    <meta name="author" content="Zilack">

	<meta property="og:title"              content="Nhạc sĩ Đỗ Bảo" />
    <meta property="og:description"        content="Website chính thức của nhạc sĩ Đỗ Bảo" />
    <meta property="og:url"              content="http://nhacsidobao.info" />
    <meta property="og:type"              content="article" />
    <meta property="og:image"              content="{{asset('thumb/thumb.png')}}" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap&subset=vietnamese" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
<![endif]-->
</head>

<body>
<!-- <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

   Your share button code -->
  <!-- <div class="fb-share-button" 
    data-href="https://nhacsidobao.info" 
    data-layout="button_count">
  </div>  -->
    <a href="http://nhacsidobao.info" class="hidden">
    <img src="http://nhacsidobao.info/thumb/thumb.png" alt=""></a>
    <!-- phần header -->
      @include('layouts.menu')
    <div id="c-mask" class="c-mask"></div>
    <div class="ads-area" hidden>
        ads-background
        Thông tin quảng cáo
        <button class="ads-close">
            <i class="fa fa-window-close"></i>
        </button>
    </div>
    <!-- Phan play music-->
    <div id="play-music">
        <div class="play-music-content">
            <div class="container">
                <p class="text-muted">
                    <div id="jquery_jplayer_1" class="jp-jplayer"></div>
                    <div id="jp_container_1" class="jp-audio" role="application" aria-label="media player">
                        <div class="jp-type-playlist">
                            <div class="jp-gui jp-interface">
                                <div class="row">
                                    <div class="col-sm-2 col-xs-3">
                                        <div class="jp-controls">
                                            <img src="{{asset('img/skip-back.svg')}}" class="jp-previous" aria-hidden="true">
                                            <img class="jp-play" src="{{asset('img/play.svg')}}" aria-hidden="true">
                                            <img class="jp-pause" src="{{asset('img/pause.svg')}}" aria-hidden="true" style="display: none;">
                                            <img src="{{asset('img/skip-forward.svg')}}" class="jp-next" aria-hidden="true">
                                        </div>
                                    </div>
                                    <div class="col-sm-8 col-xs-6">
                                        <div class="jp-time-holder">
                                            <div class="jp-current-time pull-left" role="timer" aria-label="time">&nbsp;</div>
                                            <div class="jp-duration pull-right" role="timer" aria-label="duration">&nbsp;</div>
                                            <div class="jp-details">
                                                <div class="jp-title" aria-label="title"></div>
                                            </div>
                                        </div>
                                        <div class="jp-progress">
                                            <div class="jp-seek-bar">
                                                <div class="jp-play-bar"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2 col-xs-3">
                                        <div class="jp-volume-controls">
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
                            <div class="jp-playlist" style="display:none">
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
                </p>
            </div>
        </div>
    </div>
    <!-- het phan play music-->
    
        <!-- Phần info -->
        <div class="content-body">
        <div class="black-background">
            <div class="menu_vs_baopop">
            </div>
            <div>
                <div class="container">
                <!-- Phần info -->
                    <div class="menu_vs_baopop_1">
                        
                        <div id="info_home">
                            <div class="container">
                                <div class="info-image info">
                                    <div class="info-text">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-md-5 col-md-offset-2 info-content hidden-sm hidden-xs">
                                                    {!! $info->bio_content !!}
                                                </div>
                                                <div class="col-md-5 info-content info-content-sm hidden-lg hidden-md">
                                                    {!! $info->bio_content !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <div class="link-info">
                                <a href="{{ route('info') }}" class="link_info">Tìm hiểu thêm</a>
                            </div>
                        </div>
                        <!-- Hết phần info -->
                        <!-- Phần Albums -->
                        <div class="albums-align">
                            <div class="albums">
                                <h2 class="media-title">Albums</h2>
                                <h2 class="album_nho">Albums</h2>
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
                                                <span>{{$album->performer}}</span>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    @endforeach
                                    
                                    <div class="show_all_album">
                                        <a href="{{route('music')}}">Xem tất cả</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Hết phần albums -->
                    </div>
                </div>
            </div>
            <!-- Phần contact -->
            <div class="background_contact">
                <div class="container contact">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="layer_1">
                                <h1 class="lhto">Contact</h1>
                            </div>
                            <div class="layer_2">
                                <h1 class="lhnho">Liên hệ</h1>
                            </div>
                            <form class="contact-form" action="" method="">

                                <input type="text" class="_1" name="ten" placeholder="Họ Và Tên">

                                <input type="text" class=" _2" name="sdt" placeholder="Số điện thoại">

                                <input type="email" class=" _3" name="email" placeholder="Email">

                                <input type="text" class="_4" name="td" placeholder="Tiêu đề">

                                <textarea type="text" class="_5" name="nd" placeholder="Nội dung tin nhắn"></textarea>
                                <button type="submit" name="contact-submit">Gửi thông tin</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Hết  phần contact -->
        </div>
    @include('layouts.partials.footer')
    <div class="se-pre-con">
    <div class="preloader">
        <div class="preloader-ball"></div>
        <div class="preloader-ball"></div>
        <div class="preloader-ball"></div>
        <div class="preloader-ball"></div>
        <div class="preloader-ball"></div>
        <div class="preloader-ball"></div>
        <div class="preloader-ball"></div>
        <div class="preloader-ball"></div>
    </div>
    </div>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.jplayer.min.js') }}"></script>
    <script src="{{ asset('js/jplayer.playlist.min.js') }}"></script>
    <script src="{{ asset('js/menu.js') }}"></script>
    <script src="{{ asset('js/search.js') }}"></script>
    <script scr="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
<script type="text/javascript">
        // Phan script preload
        $(document).ready(function(){
          var balls=$(".preloader-ball")
          var n=balls.length;
          var d=13;
          var t=0.45;
          balls.each(function(i){
            var cur=$(this);
            var a=(i/n)*(Math.PI*2);
            cur.css({
              left:Math.cos(a)*d,
              top:Math.sin(a)*d,
              animation:"ball-anim "+t+"s ease-in -"+((t/n)*(n-i))+"s infinite"
            })
          })
        });
        
        window.onload = function() {
            $(".se-pre-con").fadeOut();
        };
        var slideRight = new Menu({
            wrapper: '#menu',
            type: 'slide-right',
            menuOpenerClass: '.c-button',
            maskId: '#c-mask'
        });

        var slideRightBtn = document.querySelector('#c-button--slide-right');

        slideRightBtn.addEventListener('click', function(e) {
            e.preventDefault;
            slideRight.open();
        });

        $(document).ready(function() {
            var songs = $.parseJSON('{!! $songs !!}');

            new jPlayerPlaylist({
                jPlayer: "#jquery_jplayer_1",
                cssSelectorAncestor: "#jp_container_1"
            }, songs, {
                swfPath: "../../dist/jplayer",
                supplied: "mp3",
                wmode: "window",
                useStateClassSkin: true,
                autoBlur: false,
                smoothPlayBar: true,
                keyEnabled: false
            });
            var ggg=1;
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
            $(document).on('click','.ads-close',function() {
            $(".ads-area").css('display','none');
            });
            // var xxx=screen.width;
            // if(xxx<=768){
            //     $(".mask-down").addClass('is-actived');
            // }
            // $(document).on('click','.close-down',function() {
            // $(".mask-down").removeClass('is-actived');
            // });
            window.onload = function() {
                $(".se-pre-con").delay(1500).fadeOut();
            };
        });
    </script>
    <!-- <script>
        // Get the modal_op
        var modal_op = document.getElementById("mymodal_op");

        // Get the button that opens the modal_op
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal_op
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal_op 
        if(screen.width<=768) {
        modal_op.style.display = "block";
        }
        else
        {
        modal_op.style.display = "none";
        }

        // When the user clicks on <span> (x), close the modal_op
        span.onclick = function() {
        modal_op.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal_op, close it
        window.onclick = function(event) {
        if (event.target == modal_op) {
            modal_op.style.display = "none";
        }
        }
    </script> -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
   

<script type="text/javascript">
    function Redirect(){
        window.location="http://nhacsidobao.info/mobile"
    }
    if(screen.width<=1024){
        Redirect();
    }
</script>
<!-- <script type="text/javascript">
$(document).ready(function(){

 $('#search-input').keyup(function(){ 
        var query = $(this).val();
        console.log('Đây là:');
        console.log(query);
        if(query != '')
        {
         var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"{{ route('search') }}",
          method:"GET",
          data:{query:query, _token:_token},
          success:function(data){
           $('#list').fadeIn();  
                    $('#list').html(data);
          }
         });
        }
    });

    $(document).on('click', 'li', function(){  
        $('#search-input').val($(this).text());  
        $('#list').fadeOut();  
    });  

});
</script> -->
    @yield('inline_scripts')
</body>

</html>