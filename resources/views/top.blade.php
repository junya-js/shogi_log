<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/app.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <div class="flex justify-center relative">
        @if (Route::has('login'))
        <div class=" hidden fixed top-0 right-20 px-6 py-4 sm:block">
            @auth
            <a href="{{ url('/dashboard') }}" class="text-sm text-white underline">Dashboard</a>
            @else
            <a href="{{ route('login') }}" class="text-sm text-white underline">Log in</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}"
                class="ml-4 text-sm text-white underline">Register</a>
            @endif
            @endauth
        </div>
        @endif
        <img class="bg-cover min-h-screen" src=" {{ asset('image/istockphoto-617907652-612x612.jpeg') }}" alt="">
        <h2 class=".font-serif text-8xl top-40 text-white absolute">将棋log（筆書き）</h2>
        <button
            class="absolute right-80 bottom-80 bg-gray-600 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
            始める
        </button>
    </div>
    <div class="justify-center">
        <h3 class="text-center text-red-600">What app is it?</h3>
        <p class="text-center">将棋ウォーズの棋譜を見ながら検討、気付きをまとめる将棋ノートアプリです</p>
        <p>ご自分の指した棋譜の重要ポイントをスクショし、その棋譜の内容と一緒に投稿</p>
        <p>棋神のアドバイスをメモしたりするのもいいかと思います。</p>
    </div>

</body>

</html>
