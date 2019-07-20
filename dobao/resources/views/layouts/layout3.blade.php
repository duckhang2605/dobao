<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="author" content="Zilack">
    <meta property="og:type"               content="article" />
    <meta property="og:title"              content="@yield('title')" />
    <meta property="og:description"        content="@yield('description')" />
    <meta property="og:image"              content="http://nhacsidobao.info/thumb/thumb.jpg" />

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap&subset=vietnamese" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i&display=swap&subset=vietnamese" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
<![endif]-->
</head>

<body>
    <div id="head">
                <div class="container">
                    <div class="header_home">
                            <div id="menu">
                                <a href="#" id="c-button--slide-right" class="c-button c-button-common"><img src="{{ asset('img/menu-icon.png') }}"></a>
                            </div>
                            @include('layouts.partials.menu')
                            <!-- <div id="logo">
                                <a href="{{ route('home') }}">
                                <img src="http://nhacsidobao.info/thumb/thumb.png" class="hidden" alt="">
                                <img src="{{ asset('img/footer-logo.png') }}"></a>
                            </div> -->
                              <div class="customer" style="float: right; position: relative; margin-top: 5px;">
          <!-- kiem tra neu co tai khoan thi dang nhap -->
                    <img src="{{ asset('img/user.png') }}" style="height: 30px; width: 30px;">
                     <a href="{{ url('dangnhap') }}"> Đăng nhập</a>
                </div>   
                            <div id="search-form">
                                <form action="{{ route('search') }}" autocomplete="off">
                                     <input name="keyword" type="text" id="search-key" class="" placeholder="Tìm kiếm" value="@if (isset($keyword)){{ $keyword }}@endif">
                                     <button type="submit" id="search_submit"><img src="{{asset('img/icon-search.png')}}" /></button>
                                 </form>
                                 
                            </div>

                            <ul id="result" class="result" >
                            </ul>
                          
                    </div>
                    
                </div>
                
        </div>            

    <div id="c-mask" class="c-mask"></div>

    @yield('content')

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
    <script src="{{ asset('js/menu.js') }}"></script>
    <script src="{{ asset('js/layout.js') }}"></script>
    <script src="{{ asset('js/search.js') }}"></script>
 
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
<script type="text/javascript">
    function Redirect(){
        window.location="http://nhacsidobao.info/mobile"
    }
    if(screen.width<=1024){
        Redirect();
    }
</script>

    @yield('inline_scripts')
</body>
</html>