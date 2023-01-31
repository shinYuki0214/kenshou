<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">

    <style>
    </style>
</head>

<body>
    @include('parts.header')
    <main>
        <div class="content">
            @yield('content')
        </div>
    </main>

    @include('parts.footer')
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script>
        $(function() {
            if (window.matchMedia("(max-width: 1023px)").matches) {

                $('.js__nav-btn').click(function() {
                    $(this).toggleClass('js__nav-active');
                    if ($('.js__nav-area').hasClass('js__nav-active')) {
                        $('.js__nav-area').removeClass('js__nav-active');
                    } else {
                        $('.js__nav-area').addClass('js__nav-active');
                    }
                });
            } else {};
        });
    </script>
</body>

</html>
