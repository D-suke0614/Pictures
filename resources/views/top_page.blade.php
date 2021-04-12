<!DOCTYPE html>
{{-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> --}}
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pictures</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('./assets/css/top_page.css') }}">
    <link rel="stylesheet" href="{{ asset('./assets/css/common.css') }}">

</head>
<body>
    <header>

    </header>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <main>

        </main>
        <div class="content">
            <div class="title m-b-md">
                Pictures
            </div>
        </div>
    </div>
    <footer>
        <div class="footer">
            <p class="footer_text">© 2021 - Pictures All Rights Reserved.</p>
        </div>
    </footer>
</body>
</html>
