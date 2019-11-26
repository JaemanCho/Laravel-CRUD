<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, mimimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Laravel')</title>
</head>
<body>
    <ul>
        <li><a href="/">Wellcome</a></li>
        <li><a href="/contact">Contact</a></li>
        <li><a href="/hello">hello</a></li>
    </ul>
    <div class="container mx-auto">
    @yield('content')
    </div>
</body>
</html>