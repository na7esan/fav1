<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>お気に入りサイト登録ページ</title>
    <h1>お気に入りサイト登録ページ</h1>
    <form method="POST" action="{{ url('favorite-sites') }}" enctype="multipart/form-data">
        @csrf

        <div>
            <label for="title">サイト名</label>
            <input type="text" name="title" id="title">
        </div>

        <div>
            <label for="url">URL</label>
            <input type="text" name="url" id="url">
        </div>

        <div>
            <button type="submit">登録</button>
        </div>

    </form>
</head>
<body>

</body>
</html>
