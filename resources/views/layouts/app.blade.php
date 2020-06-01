<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Recipe</title>

    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

    <script src="https://kit.fontawesome.com/9249033330.js" crossorigin="anonymous"></script>
</head>
<body>
<div>
    @include('layouts.nav')

    <div class="container mx-auto py-12">
        @yield('content')
    </div>

    @include('layouts.footer')
</div>
</body>
</html>
