@extends('layouts.layout2')
@section('title', $news->title)
@section('news_menu', 'c-menu_item-active')
@section('news-active', 'c-menu-c_item-active')


@section('content')
<h3 class="news-title-hide">{{ $news->title }}</h3>
<div class="container news-relative">
    <div class="news-content-detail">
        <div class="news-container-detail">
            <h3 class="title-new-show">{{ $news->title }}</h3>
            <div class="news-time-detail"> {{ $news->created_at }}</div>
            <div class="news-desc-detail">
                {!! $news->content !!}
            </div>
        </div>
    </div>

    <hr>

    <div class="row news-relate">
        @if (isset($news->relatedNews[0]))
        @php $pNews = $news->relatedNews[0] @endphp
        <div class="previous">
            <div class="news-relate-title">Bài trước</div>
            <a href="{{ route('news.show', ['id' => $pNews->id, 'title' => $pNews->title]) }}"><h3>{{ $pNews->title }}</h3></a>
        </div>
        @endif
        @if (isset($news->relatedNews[1]))
        @php $nNews = $news->relatedNews[1] @endphp
        <div class="next">
            <div class="news-relate-title">Bài sau</div>
            <a href="{{ route('news.show', ['id' => $nNews->id, 'title' => $nNews->title]) }}"><h3>{{ $nNews->title }}</h3></a>
        </div>
        @endif
    </div>
</div>
@endsection()