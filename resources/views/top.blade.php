<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="" href="{{ asset('js/style.js') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@1,600&display=swap" rel="stylesheet">
    <title>Shogi_log</title>
</head>

<body>
    {{-- ローディング画面 --}}
    <div id="splash">
        <div id="splash_text"></div>
    </div>

    <div class=".container">
        <section class="absolute w-full h-screen">
            <img src=" {{ asset('image/take.jpg') }}" class="object-cover w-full h-full"
                alt="Image alt text" />
        </section>
        @if (Route::has('login'))
        <div class="hidden fixed top-0 right-20 px-6 py-4 sm:block">
            @auth
            <a href="{{ url('/dashboard') }}" class="text-sm text-white underline">Dashboard</a>
            @else
            <a href="{{ route('login') }}" class="text-sm text-white underline">Log in</a>
            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-sm text-white underline">Register</a>
            @endif
            @endauth
        </div>
        @endif

        <h2 class="absolute top-1/2 left-1/2 -translate-y-2/4 -translate-x-2/4 m-auto text-9xl text-white">Shogi_log
        </h2>
        <label
            class="text-3xl underline text-orange-600 absolute top-3/4 left-1/2 -translate-y-2/4 -translate-x-2/4 m-auto open"
            for="pop-up">
            What app is it?
        </label>
        <input type="checkbox" id="pop-up">
        <div class="overlay">
            <div class="window">
                <label class="close" for="pop-up">x</label>
                <p class="text">将棋ウォーズの棋譜を見ながら検討、気付きをまとめる将棋ノートアプリです。<br>
                    ご自分の指した棋譜の重要ポイントをスクショします。その棋譜の場面を検討し、メモを残したり、棋神のアドバイスをメモしたりするのにご利用ください。</p>
            </div>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://rawgit.com/kimmobrunfeldt/progressbar.js/master/dist/progressbar.min.js"></script>
    <!--IE11用-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/babel-standalone/6.26.0/babel.min.js"></script>
    <!--不必要なら削除-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/babel-polyfill/6.26.0/polyfill.min.js"></script>
    <!--不必要なら削除-->
    <!--自作のJS-->
    <script src="{{ asset('js/style.js') }}"></script>
</body>

</html>
