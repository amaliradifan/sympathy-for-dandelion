<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document | SFD</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/white_dandelion.ico') }}" />
    @vite('resources/css/app.css')
</head>

<body style="background-color: #1f1f1f; color:#d9d9d9">
    @include('partials.navbar')
    <main>
        @yield('container')
    </main>
    <div class="divider"></div>
    @include('partials.footer')
</body>

</html>
