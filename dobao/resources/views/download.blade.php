@extends('layouts.layout3')
@section('title', 'Download')

@section('content')

<div class="row">
	<div class="img-download">
		<img src="{{asset('img/down-page.png')}}" alt="">
	</div>
        <div class="download-title">
            <h3 class="down-title">Tải ứng dụng</h3>
            <span>Nghe nhạc offline, cập nhật tin tức mới nhất từ nhạc sĩ Đỗ Bảo</span>
        </div>
        <div class="info-download">
            @include('layouts.partials.download')
        </div>
    </div>
    @include('layouts.partials.footer')
@endsection()