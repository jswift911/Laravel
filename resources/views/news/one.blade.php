@extends('layouts.main')

@section('title')
    @parent Одна новость
@endsection

@section('menu')
    @include('menu.main')
@endsection

@section('content')
    <div class="wrapper">
    @if (!$news['isPrivate'])
        <h2>{{ $news['title'] }}</h2>
        <p>{{ $news['text'] }}</p>
    @else
        <br>Нет прав!
    @endif
    </div>
@endsection

@section('footer')
    @include('footer.main-footer')
@endsection