<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dictionary</title>
</head>
<body>
<form action="/translate" method="post">
    @csrf
    Nhập vào một từ: <input type="text" name="word">
    <input type="submit" value="Dịch">
</form>
</body>
</html>
