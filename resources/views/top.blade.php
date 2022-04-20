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
        <img class="bg-cover min-h-screen" src=" {{ asset('image/istockphoto-617907652-612x612.jpeg') }}" alt="">
        <h2 class="text-8xl top-40 text-white absolute">将棋log</h2>
        <button
            class="absolute right-80 bottom-80 gray-600 hover:bg-blue-400 text-black font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
            始める
        </button>
    </div>
    <div class="justify-center">
        <h3 class="text-center text-red-600">What app is it?</h3>
        <p class="text-center">将棋ウォーズの棋譜を見ながら検討、気付きをまとめる将棋ノートアプリです</p>
    </div>

</body>

</html>
