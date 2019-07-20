@extends('layouts.layout1')
@section('title', 'Tin tức')
@section('news_menu', 'c-menu_item-active')
@section('news-active', 'c-menu-c_item-active')

@section('content')

<div class="info-image news">
	<div class="info-title-hide">
	<h1>Tin tức</h1>
    </div>

    <div class="info-title">
	<h1>Tin tức</h1>
    </div>
</div>

<div class="container new-container" id="myList">
    @foreach ($news as $n)
    <div class="news-content item" id="news-ls">
        <div class="container-news">
            <h3><a href="{{ route('news.show', ['id' => $n->id, 'title' => vietnamese_url($n->title) ]) }}">{{ $n->title }}</a></h3>
            <div class="news-time"><span>{{ $n->created_at }}<span></div>
            <div class="news-img">
                <img src="{{ $n->feature_url }}" class="img-responsive">
            </div>
            <div class="news-desc">
                {{ $n->excerpt }}
            </div>
            <div class="news-view-more">
                <a href="{{ route('news.show', ['id' => $n->id, 'title' => vietnamese_url($n->title) ]) }}">Đọc tiếp</a>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection()
@section('inline_scripts')
<script src="{{asset('js/jquery.simpleLoadMore.min.js')}}"></script>
<script>
    $('#myList').simpleLoadMore({
      item: '.item',
      count: 3
    });
  </script>
@endsection