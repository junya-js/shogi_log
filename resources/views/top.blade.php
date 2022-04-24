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
    <div class="">

        <div class="">
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

            <section class="w-full h-screen">
                <img src=" {{ asset('image/EB16CA6D-B6D7-4A83-B9AB-42EAC7030639.jpg') }}" class="object-cover w-full h-full"
                    alt="Image alt text" />
            </section>

                <div class="absolute top-0 bottom-0  m-auto ">
                    <h2 class=" text-9xl text-white">Shogi_log</h2>
                    <h3 class="text-red-600">What app is it?</h3>
                {{-- <div class="mt-10">
                    <p class="text-center">将棋ウォーズの棋譜を見ながら検討、気付きをまとめる将棋ノートアプリです</p>
                    <p class="text-center">ご自分の指した棋譜の重要ポイントをスクショし、その棋譜の内容と一緒に投稿したり、棋神のアドバイスをメモしたりするのにも使えます。</p>
                </div> --}}
            </div>

        </div>
    </div>

</body>

</html>
