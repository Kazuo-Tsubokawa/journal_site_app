<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Document</title>
</head>

<body>
    @if ($errors->any())
        <div class="error">
            <p>
                <b>{{ count($errors) }}件のエラーがあります。</b>
            </p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h1>投稿論文編集</h1>
    <form action="/articles/{{ $article->id }}" method="post">
        @csrf
        @method('PATCH')
        <form action="/articles" method="post" value="{{ $article->title }}">
            @csrf
            <p>
                <label for="title">論文タイトル</label>
                <input type="text" name="title" value="{{ old('title', $article->title) }}">
            </p>
            <p>
                <label for="body">本文</label>
                <textarea name="body" id="body">{{ old('body', $article->body) }}</textarea>
            </p>
            <input type="submit" value="更新">
        </form>
</body>

</html>
