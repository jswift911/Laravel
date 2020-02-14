{{--<a href="{{ route('home') }}">Главная</a>--}}
{{--<a href="{{ route('news.all') }}">Новости</a>--}}
{{--<a href="{{ route('news.categories') }}">Категории</a>--}}
{{--<a href="{{ route('admin.admin') }}">Админка</a>--}}
{{--<a href="{{ route('news.addNews') }}">Добавить новость</a>--}}

<nav class="navbar navbar-expand navbar-dark bg-dark">
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('home') }}">Главная <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('news.all') }}">Новости</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('news.categories') }}">Категории</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.admin') }}">Админка</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('news.addNews') }}">Добавить новость</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('auth.login') }}">Войти</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('auth.register') }}">Зарегистрироваться</a>
            </li>
        </ul>
    </div>
</nav>