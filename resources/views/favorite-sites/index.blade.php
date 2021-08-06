<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>お気に入りサイト一覧ページ</title>
</head>
<body>
    <h1>お気に入りサイト一覧</h1>
    @foreach ($favoriteSites as $favoriteSite)
        <p>{{ $favoriteSite->title }}</p>
        <p>{{ $favoriteSite->url }}</p>
    @endforeach
</body>
</html>
