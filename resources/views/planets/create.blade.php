<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>惑星登録</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <h1>惑星情報登録</h1>
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
    <form action="/planets" method="post">
        @csrf
        <div class="planet-field">
            <label for="name_ja">名前</label>
            <input type="text" name="name_ja" value="{{ old('name_ja') }}" required>
        </div>
        <div class="planet-field">
            <label for="name_en">名前(英語)</label>
            <input type="text" name="name_en" value="{{ old('name_en') }}" required>
        </div>
        <div class="planet-field">
            <label for="radius_km">半径</label>
            <input type="number" name="radius_km" value="{{ old('radius_km') }}" required>
        </div>
        <div class="planet-field">
            <label for="wight">重量</label>
            <input type="number" name="weight" value="{{ old('weight') }}" required>
        </div>
        <input type="submit" value="登録">
    </form>
    <a href="/planets">戻る</a>
</body>

</html>
