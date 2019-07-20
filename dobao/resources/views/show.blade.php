@extends('layouts.showlayout')
@section('title', 'Lịch diễn')
@section('show_menu', 'c-menu_item-active')
@section('show-active', 'c-menu-c_item-active')
@section('content')
<h1 class="page-title">
    Lịch diễn
</h1>
<div class="photo-galery-head">
    <span class="photo_galery">Lịch biểu diễn</span>
</div>
<ul class="content-tab">
    @foreach ($shows as $status => $ss)
    <li class="@if ($status == 0) active @endif">
        <a href="javascript:void(0)" data-tab="{{ $status }}">{{ $process[$status] }}</a>
    </li>
    @endforeach
</ul>

<div class="show-container container">
    @foreach ($shows as $status => $ss)

    <div class="tab-container tab-{{ $status }}">
        @if(!empty($ss))
        @foreach ($ss as $s)
        <div class="row show-info">
            <div class="show-time">
                <span><i class="fa fa-calendar-check-o" aria-hidden="true"></i>{{ date('H:i', strtotime($s->on_datetime)) }} - {{ date('d-m-Y', strtotime($s->on_datetime)) }}</span>
            </div>
            <div class="show-name">{{ $s->name }}</div>
            <div class="show-desc">{{ $s->impression }}</div>
            
            <div class="show-address">
                <span><i class="fa fa-map-marker" aria-hidden="true"></i> {{ $s->address }}</span>
            </div>
            <div class="show-contact">
                @if($status==1)
                <a href="{{route('news')}}">Chi tiết</a>
                @else
                <a href="{{route('contact')}}">Liên hệ</a>
                @endif
            </div>
        </div>
        @endforeach
        @else
         <h1>Không có sự kiện nào sắp diễn ra</h1>
        
        @endif
    </div>
  
    @endforeach
</div>
@endsection()

@section('inline_scripts')
<script>
    $(document).on('click', '.content-tab li a', function() {
        var tab = $(this).data('tab');
        $('.tab-container').hide();
        $('.tab-' + tab).show();

        $('.content-tab li').removeClass('active');
        $(this).closest('li').addClass('active');
    });

    $(document).ready(function() {
        $('.content-tab li.active a').trigger('click');
    });
</script>
@endsection()