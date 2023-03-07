<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>
        {{$title??''}}
    </title>
</head>
<body>
    <x-web.block.header></x-web.block.header>

    <div class="container-lg p-2">
        {{$slot}}
    </div>

</body>
</html>
