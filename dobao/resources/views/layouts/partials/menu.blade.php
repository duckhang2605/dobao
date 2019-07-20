<nav id="c-menu--slide-right" class="c-menu c-menu--slide-left">
    <div class="container">
    <div class="top-area">
        <button class="c-menu__close top-area-item"><img src="{{asset('img/menu/x.svg')}}" alt=""></i></button>
        <div class="download-link top-area-item">
            <a href="{{ route('download') }}"><i class="fa fa-download" aria-hidden="true"></i> Tải ứng dụng</a>
        </div>
        <div id="search-form" class="top-area-item">
            <form action="{{ route('search') }}">
                <input name="keyword" type="text" id="search-input" class="" placeholder="Tìm kiếm" value="@if (isset($keyword)){{ $keyword }}@endif">
                <button type="submit" id="search_submit"><img src="{{asset('img/icon-search.png')}}" /></button>
                </form>
        </div>
    </div>
    </div>
    <ul class="c-menu__items">
    <li class="c-menu__item menu-home @yield('home-active') _111"><a href="#" class="c-menu__link @yield('home_menu')"></a></li>
        <li class="c-menu__item menu-info @yield('info-active') _222"><a href="#" class="c-menu__link @yield('info_menu')"></a></li>
        <li class="c-menu__item menu-news @yield('news-active') _333"><a href="#" class="c-menu__link @yield('news_menu')"></a></li>
        <li class="c-menu__item menu-music @yield('music-active') _444"><a href="#" class="c-menu__link @yield('music_menu')"></a></li>
        <li class="c-menu__item menu-photo @yield('photo-active') _555"><a href="#" class="c-menu__link @yield('photo_menu')"></a></li>
        <li class="c-menu__item menu-show @yield('show-active') _6"><a href="#" class="c-menu__link @yield('show_menu')"></a></li>
        <li class="c-menu__item menu-contact @yield('contact-active') _7"><a href="#" class="c-menu__link @yield('contact_menu')"></a></li>        
        <li class="c-menu__item menu-home @yield('home-active') _8"><a href="#" class="c-menu__link @yield('home_menu')"></a></li>
        <li class="c-menu__item menu-info @yield('info-active') _9"><a href="#" class="c-menu__link @yield('info_menu')"></a></li>
        <li class="c-menu__item menu-news @yield('news-active') _10"><a href="#" class="c-menu__link @yield('news_menu')"></a></li>
        <li class="c-menu__item menu-music @yield('music-active') _11"><a href="#" class="c-menu__link @yield('music_menu')"></a></li>
        <li class="c-menu__item menu-photo @yield('photo-active') _12"><a href="#" class="c-menu__link @yield('photo_menu')"></a></li>
        <li class="c-menu__item menu-show @yield('show-active') _13"><a href="#" class="c-menu__link @yield('show_menu')"></a></li>
        <li class="c-menu__item menu-contact @yield('contact-active') _14"><a href="#" class="c-menu__link @yield('contact_menu')"></a></li>
        <li class="c-menu__item menu-home real @yield('home-active') _15" onclick="playAudio_7()"><a href="{{ route('home') }}" class="c-menu__link @yield('home_menu')">Trang chủ</a></li>
        <li class="c-menu__item menu-info real @yield('info-active') _16" onclick="playAudio_6()"><a href="{{ route('info') }}" class="c-menu__link @yield('info_menu')">Tiểu sử</a></li>
        <li class="c-menu__item menu-news real @yield('news-active') _17" onclick="playAudio_5()"><a href="{{ route('news') }}" class="c-menu__link @yield('news_menu')">Tin tức</a></li>
        <li class="c-menu__item menu-music real @yield('music-active') _18" onclick="playAudio_4()"><a href="{{ route('music') }}" class="c-menu__link @yield('music_menu')">Âm nhạc</a></li>
        <li class="c-menu__item menu-photo real @yield('photo-active') _19" onclick="playAudio_3()"><a href="{{ route('photo') }}" class="c-menu__link @yield('photo_menu')">Hình ảnh</a></li>
        <li class="c-menu__item menu-show real @yield('show-active') _20" onclick="playAudio_2()"><a href="{{ route('show') }}" class="c-menu__link @yield('show_menu')">Lịch diễn</a></li>
        <li class="c-menu__item menu-contact real @yield('contact-active') _21" onclick="playAudio_1()"><a href="{{ route('contact') }}" class="c-menu__link @yield('contact_menu')">Liên hệ</a></li>
        <li class="c-menu__item menu-home @yield('home-active') _22"><a href="#" class="c-menu__link @yield('home_menu')"></a></li>
        <li class="c-menu__item menu-info @yield('info-active') _23"><a href="#" class="c-menu__link @yield('info_menu')"></a></li>
        <li class="c-menu__item menu-news @yield('news-active') _24"><a href="#" class="c-menu__link @yield('news_menu')"></a></li>
        <li class="c-menu__item menu-music @yield('music-active') _25"><a href="#" class="c-menu__link @yield('music_menu')"></a></li>
        <li class="c-menu__item menu-photo @yield('photo-active') _26"><a href="#" class="c-menu__link @yield('photo_menu')"></a></li>
        <li class="c-menu__item menu-show @yield('show-active') _27"><a href="#" class="c-menu__link @yield('show_menu')"></a></li>
        <li class="c-menu__item menu-contact @yield('contact-active') _28"><a href="#" class="c-menu__link @yield('contact_menu')"></a></li>        
        <li class="c-menu__item menu-home @yield('home-active') _29"><a href="#" class="c-menu__link @yield('home_menu')"></a></li>
        <li class="c-menu__item menu-info @yield('info-active') _30"><a href="#" class="c-menu__link @yield('info_menu')"></a></li>
        <li class="c-menu__item menu-news @yield('news-active') _31"><a href="#" class="c-menu__link @yield('news_menu')"></a></li>
        <li class="c-menu__item menu-music @yield('music-active') _32"><a href="#" class="c-menu__link @yield('music_menu')"></a></li>
        <li class="c-menu__item menu-photo @yield('photo-active') _33"><a href="#" class="c-menu__link @yield('photo_menu')"></a></li>
        <li class="c-menu__item menu-show @yield('show-active') _34"><a href="#" class="c-menu__link @yield('show_menu')"></a></li>
        <li class="c-menu__item menu-contact @yield('contact-active') _35"><a href="#" class="c-menu__link @yield('contact_menu')"></a></li>
    </ul>
    <audio id="myAudio1" src="{{asset('audio/1.wav')}}"></audio>
    <audio id="myAudio2" src="{{asset('audio/2.wav')}}"></audio>
    <audio id="myAudio3" src="{{asset('audio/3.wav')}}"></audio>
    <audio id="myAudio4" src="{{asset('audio/4.wav')}}"></audio>
    <audio id="myAudio5" src="{{asset('audio/5.wav')}}"></audio>
    <audio id="myAudio6" src="{{asset('audio/6.wav')}}"></audio>
    <audio id="myAudio7" src="{{asset('audio/7.wav')}}"></audio>
    <div class="download-link top-area-item bottom">
        <a href="{{ route('download') }}"><i class="fa fa-download" aria-hidden="true"></i> Tải ứng dụng</a>
    </div>
    <hr class="hr bottom">
    <div class="social-menu">
        <a href="" class="social-item"><img src="{{asset('img/menu/fb.svg')}}" alt=""></a>
        <a href="" class="social-item"><img src="{{asset('img/menu/insta.svg')}}" alt=""></a>
        <a href="" class="social-item youtube"><img src="{{asset('img/menu/youtube.svg')}}" alt=""></a>
    </div>
    <script>
    var x = document.getElementById("myAudio1"); 
    if(screen.width>=1024){
        function playAudio_1() { 
    x.play(); 
    } 
    var x1 = document.getElementById("myAudio2"); 
    function playAudio_2() { 
    x1.play(); 
    } 
    var x2 = document.getElementById("myAudio3"); 
    function playAudio_3() { 
    x2.play(); 
    } 
    var x3 = document.getElementById("myAudio4"); 
    function playAudio_4() { 
    x3.play(); 
    } 
    var x4 = document.getElementById("myAudio5"); 
    function playAudio_5() { 
    x4.play(); 
    } 
    var x5 = document.getElementById("myAudio6"); 
    function playAudio_6() { 
    x5.play(); 
    } 
    var x6 = document.getElementById("myAudio7"); 
    function playAudio_7() { 
    x6.play(); 
    } 
    }
    

  </script>
</nav>   
