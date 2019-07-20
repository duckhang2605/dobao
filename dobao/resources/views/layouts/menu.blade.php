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
                    <img src="{{ asset('img/user.png') }}" style="height: 30px; width: 30px; ">
                     <!-- <a href="#" data-toggle="dropdown-menu" > Đăng nhập</a> -->
                    
                      <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #efb479; ">
                        Đăng nhập
                      </a>

                       <ul class="dropdown-menu" style="background-color: #1a1b1d47 !important;">
                          <li>
                            <a href="#"  data-toggle="modal" data-target="#myModal">Đăng Nhập</a></li>
                            <li class="divider" style="color: #333333; margin: 0px 5px 0px 5px;"></li>
                          <li>
                            <a href="#" data-toggle="modal" data-target="#myModal2">Đăng Ký</a></li>
                            <li class="divider" style="color: #333333; margin: 0px 5px 0px 5px;" ></li>
                          <li><a href="#" data-toggle="modal" data-target="#myModal3">Zcoint</a></li>
                      
                           <li>
                            <a href=""  data-toggle="modal" data-target="#myModal"></a></li>
                            <li class="divider" style="color: #333333; margin: 0px 5px 0px 5px;"></li>
                          <li>
                            <a href="" data-toggle="modal" data-target="#myModal2">Đăng Ký</a></li>
                            <li class="divider" style="color: #333333; margin: 0px 5px 0px 5px;" ></li>
                          
                        </ul>
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
      
            <div class="modal" id="myModal" @if($status)style="display: block;"@endif>
              <div class="modal-dialog">
                <div class="modal-content">
                <!-- Modal Header -->
                  <div class="modal-header">
                    <img src="{{asset('img/zilacklogo.png')}}" class="zilacklogo">
                    <h3 style="text-align: center;">Đăng Nhập</h3>
                   <form action="{!!route('login')!!}" method="POST" >
                  
                      <div class="form-group">
                        <input type="text" class="form-control" id="email" placeholder="Email hoặc tên đăng nhập" name="email">
                      </div>
                      <div class="form-group">
                        <input type="password" class="form-control" id="pwd" placeholder="Mật Khẩu" name="pass">
                      </div>
                      @if($status)<p>{{$status}}</p>@endif
                      <div class="form-group">
                        <button type="submit" class="btn btn-light" style="color: white; background: #504d4d; margin-top: 20px;">Đăng nhập</button>
                      </div>
                      <div class="form-group">
                       <button type="submit" class="btn btn-primary" style=" margin-top:20px; margin-bottom: 30px;">Đăng Nhập Qua FaceBook</button>
                      </div>
                      <a href="#" style="margin-left: 50px;"> Đăng Ký</a> 
                      <a href="#" style="float: right; margin-right: 50px;">Quên Mật Khẩu</a>
                    </form>
                </div>
                
              </div>
            </div>
        </div>  
         <div class="modal" id="myModal2">
              <div class="modal-dialog">
                <div class="modal-content">
              
                <!-- Modal Header -->
                  <div class="modal-header">
                    <img src="{{asset('img/zilacklogo.png')}}" class="zilacklogo">
                    <h3 style="text-align: center;">Đăng Ký</h3>
                   <form action="#">
                      <div class="form-group">
                        <input type="text" class="form-control" id="name" placeholder="Họ Và Tên" name="">
                      </div>
                      <div class="form-group">

                        <input type="text" class="form-control" id="email" placeholder="Địa Chỉ Email " >
                      </div>
                      <div class="form-group">
                        <input type="password" class="form-control" id="pwd" placeholder="Mật Khẩu">
                      </div> 
                      <div class="form-group">
                        <input type="password" class="form-control" id="repeat" placeholder="Nhập Lại Mật Khẩu">
                      </div>
                      <div class="form-group">
                        <button type="submit" class="btn btn-light" style="color: white; background: #504d4d; margin-top: 20px;">Đăng Ký</button>
                      </div>
                    </form>
                </div>
                
            
                
              </div>
            </div>
        </div>  
        <div class="modal" id="myModal3">
              <div class="modal-dialog">
                <div class="modal-content">
              
                <!-- Modal Header -->
                  <div class="modal-header">
                    <img src="{{asset('img/zilacklogo.png')}}" class="zilacklogo">
                    <h3 style="text-align: center;">Mua Zcoin</h3>
                   <form action="#">
                      <ul>
                        <li><a href="#">200 Zcoin <span class="p">20.000 VNĐ</p> </a></li>
                        <li><a href="#">500 Zcoin <span class="p">50.000 VNĐ</p> </a></li>
                        <li><a href="#">1000 Zcoin <span class="p">110.000 VNĐ</p> </a></li>
                        <li><a href="#">5500 Zcoin <span class="p">550.000 VNĐ</p> </a></li>
                        <li><a href="#">11000 Zcoin <span class="p">1.100.000 VNĐ</p> </a></li>
                        <li><a href="#">22000 Zcoin <span class="p">2.200.000 VNĐ</p> </a></li>
                      </ul>
                      <div class="form-group">
                        <p class="contactand">Mọi thắc mắc xin liên hệ với bộ phận <a href="#">CSKK : 0888.60.8668</a></p>
                      </div>
                      <div class="form-group">
                        <p style="color: black;">Chính sách & Điều khoản sử dụng dịch vụ </p>
                      </div>

                    </form>
                </div>
                
            
                
              </div>
            </div>
        </div>  
    <!-- hết header -->