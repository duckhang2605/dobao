@extends('layouts.layout2')
@section('title', 'Hình ảnh')
@section('photo_menu', 'c-menu_item-active')
@section('photo-active', 'c-menu-c_item-active')

@section('content')

<h1 class="page-title">
    Hình ảnh
</h1>
<div class="photo-galery-head">
<span class="photo_galery">Thư viện hình ảnh</span>
</div>
<ul class="content-tab">
    @foreach ($photos as $category => $ps)
    <li class="@if ($category == 0) active @endif">
        <a href="javascript:void(0)" data-tab="{{ $category }}">{{ $categories[$category] }}</a>
    </li>
    @endforeach
</ul>

<div class="photo-container container-fluid">
    @foreach ($photos as $category => $ps)
    <div class="row tab-container" id="tab-{{$category}}">
        @foreach ($ps as $p)
        <div class="col-md-3 col-xs-6">
            <a href="{{ $p->file_path }}" data-fancybox="gallery"><img src="{{ $p->thumb_url }}" class="img-responsive img-gallery"></a>
        </div>
        @endforeach
    </div>
    @endforeach
</div>
@endsection()

@section('inline_scripts')
<script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
<script>
    $(document).on('click', '.content-tab li a', function() {
        var tab = $(this).data('tab');
        $('.tab-container').hide();
        $('#tab-' + tab).show();

        $('.content-tab li').removeClass('active');
        $(this).closest('li').addClass('active');
    });

    $(document).ready(function() {
        $('.content-tab li.active a').trigger('click');
    });
</script>
@endsection()