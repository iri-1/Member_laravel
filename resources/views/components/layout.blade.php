<?php
// var_dump($member);
// exit;
// dd($members);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <title>{{ $title }}</title>
</head>
<body>
{{ $slot }}
</body>
</html>
