<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {!!$name!!}
    {!!$email!!}
    {!!$text!!}
    <img src="{{ $message->embed('assets/img/ukladka.jpg') }}" alt="">
</body>
</html>