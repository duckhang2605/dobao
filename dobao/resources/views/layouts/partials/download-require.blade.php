    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap&subset=vietnamese" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i&display=swap&subset=vietnamese" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/show.css') }}">
<div id="mymodal_op" class="modal_op">

  <!-- modal_op content -->
  <div class="modal_op-content" style="color:white;">
  <span class="close"><img src="{{asset('img/menu/x.svg')}}" alt=""></span>
    <h1>
     Tải Ứng Dụng 
    </h1>
    <h3>Để trải nghiệm ứng dụng của nhạc sĩ Đỗ Bảo trên mobile</h3>
    <div class="down-modal-area">
    @include('layouts.partials.download')
  </div>
  </div>

</div>