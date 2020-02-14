@extends('layouts.main')

@section('title')
    @parent Админка
@endsection

@section('menu')
    @include('menu.admin')
@endsection

@section('content')
    <div class="wrapper">
        <h1>Добро пожаловать, Admin!</h1>
    </div>
@endsection

@section('footer')
    @include('footer.main-footer')
@endsection