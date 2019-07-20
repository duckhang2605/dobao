@extends('layouts.contactlayout')
@section('title', 'Liên hệ')
@section('contact_menu', 'c-menu_item-active')
@section('contact-active', 'c-menu-c_item-active')

@section('content')

<div class="contact-container container">
    <div class="row">
        <div class="col-md-12">
            <!-- Phần contact -->
            <div class="background_contact">
                <div class="container contact">
                    <div class="row">
                        <div class="layer_2">
                            <h1 class="lhnho">Liên hệ book show, quảng cáo</h1>
                        </div>
                        <form class="contact-form" action="" method="">

                            <input type="text" class="_1" name="ten" placeholder="Họ Và Tên" required>

                            <input type="text" class=" _2" name="sdt" placeholder="Số điện thoại" required>

                            <input type="email" class=" _3" name="email" placeholder="Email" required>

                            <input type="text" class="_4" name="td" placeholder="Tiêu đề" required>

                            <textarea type="text" class="_5" name="nd" placeholder="Nội dung tin nhắn" required></textarea>
                            <button type="submit" name="contact-submit">Gửi liên hệ</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Hết  phần contact -->
    <div class="row">
        <div class="download-title">
            <h3>Tải ứng dụng</h3>
            <span>Nghe nhạc offline, cập nhật tin tức mới nhất từ nhạc sĩ Đỗ Bảo</span>
        </div>
        <div class="info-download">
            @include('layouts.partials.download')
        </div>
    </div>
</div>

</div>

@endsection()