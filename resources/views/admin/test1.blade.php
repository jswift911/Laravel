@extends('layouts.main')

@section('title')
    @parent Тест 1
@endsection

@section('menu')
    @include('menu.admin')
@endsection

@section('content')
    <div class="wrapper">
    <h2>test1</h2>
    </div>
@endsection

@section('footer')
    @include('footer.main-footer')
@endsection