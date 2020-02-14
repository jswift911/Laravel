@extends('layouts.main')

@section('title')
    @parent Новости
@endsection

@section('menu')
    @include('menu.main')
@endsection

@section('content')
    <div class="wrapper">
    @forelse($news as $item)
        <div>
            <h2>{{ $item['title'] }}</h2>
            @if (!$item['isPrivate'])
                <a href="{{ route('news.One', $item['id']) }}">Подробнее...</a>
            @endif
        </div>
        <hr>
    @empty
        <p>Нет новостей</p>
    @endforelse
    </div>
@endsection

@section('footer')
    @include('footer.main-footer')
@endsection