<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>惑星情報</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <h1>惑星情報</h1>
    @if ($planet !== null)
        <div class="planet-field">
            <strong>名前 : {{ $planet->name_ja }}</strong>
        </div>
        <div class="planet-field">
            <strong>名前(英語) : {{ $planet->name_en }}</strong>
        </div>
        <div class="planet-field">
            <strong>半径 : {{ $planet->radius_km }}</strong>
        </div>
        <div class="planet-field">
            <strong>重量 : {{ $planet->weight }}</strong>
        </div>
    @else
        <p>id = {{ $id }} の惑星情報は存在しません。</p>
    @endif
    <a href="/planets">戻る</a>
</body>

</html>
