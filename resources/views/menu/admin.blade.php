<div class="main-menu">
{{--    <a href="{{ route('home') }}">Главная</a>--}}
{{--    <a href="{{ route('admin.test1') }}">Тест 1</a>--}}
{{--    <a href="{{ route('admin.test2') }}">Тест 2</a>--}}
    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('home') }}">Главная <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.test1') }}">Тест 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.test2') }}">Тест 2</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
