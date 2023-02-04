<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
    </style>
</head>

<body>
    <div id="VueHeader">
    </div>
    <main class="main__area">
        <div class="content">
            @yield('content')
        </div>
    </main>
    @include('parts.footer')
    <script>
        var app = new Vue({
            el: '#VueHeader',
            data: {
                open: false
            }
        })
    </script>
</body>


</html>
