@extends('layouts.layout1')
@section('title', 'Tiểu sử nhạc sĩ Đỗ Bảo')
@section('info_menu', 'c-menu_item-active')
@section('info-active', 'c-menu-c_item-active')


@section('content')

    <div class="info-text">
            <div class="row">
                <div class="info-content hidden-sm hidden-xs">
                    {!! $info->bio_content !!}
                </div>
                
                <div class="info-content info-content-sm hidden-lg hidden-md">
                    {!! $info->bio_content !!}
                </div>
    </div>
</div>
@endsection()