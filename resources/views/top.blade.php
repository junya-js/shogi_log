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
        <h2 class="absolute">将棋log</h2>
        {{-- 画像の上にh2 --}}
        <img class="bg-cover min-h-screen" src=" {{ asset('image/istockphoto-617907652-612x612.jpeg') }}" alt="">
        {{-- 画像の上にbutton --}}
        <button
            class="absolute gray-600 hover:bg-blue-400 text-black font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
            Button
        </button>
    </div>

    <h3 class="text-red-600">What app is it?</h3>
    <p>将棋ウォーズの棋譜を見ながら検討、気付きをまとめる将棋ノートアプリです</p>

</body>

</html>
