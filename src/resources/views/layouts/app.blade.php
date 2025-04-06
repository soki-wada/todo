<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo</title>
    <link rel="stylesheet" href="{{asset('css/sanitize.css')}}">
    <link rel="stylesheet" href="{{asset('css/common.css')}}">
    @yield('css')
</head>
<body>
    <header>
        <div class="header__inner">
            <div class="header__links">
                <a href="/" class="header__logo">
                    Todo
                </a>
                <nav>
                    <ul class="header__nav">
                        <li class="header__nav--item">
                            <a href="/categories" class="header__nav--link">
                                カテゴリ一覧
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>