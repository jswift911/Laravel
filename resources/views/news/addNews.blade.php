@extends('layouts.main')

@section('title')
    @parent добавления новости
@endsection

@section('menu')
    @include('menu.main')
@endsection

@section('content')
    <form class="wrapper" action="" method="post">
        <div class="form-group">
            <label for="exampleFormControlSelect1">Выберите категорию</label>
            <select style="width: 250px" class="form-control" id="exampleFormControlSelect1">
                @forelse($categories as $item)
                    <option name="category" value="">{{$item['category']}}</option>
                @empty
                    <option name="category" value="">Без категории</option>
                @endforelse
            </select>
        </div>
        <div class="form-group">
            <textarea name="newsText" style="width: 350px; height: 100px" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-secondary">Добавить новость</button>
    </form>
@endsection

@section('footer')
    @include('footer.main-footer')
@endsection