<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="description" content="Ogani Template" />
        <meta name="keywords" content="Ogani, unica, creative, html" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />

        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet"/>

        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"    type="text/css" />
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ asset('css/elegant-icons.css') }}"    type="text/css" />
        <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}"      type="text/css" />
        <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }}"    type="text/css" />
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ asset('css/slicknav.min.css') }}"     type="text/css" />
        <link rel="stylesheet" href="{{ asset('css/style.css') }}"            type="text/css" />

        <title>Document</title>
    </head>

    <body>
        <x-header></x-header>

        {{ $slot }}

        <x-footer></x-footer>

        <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
        <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('js/jquery.slicknav.js') }}"></script>
        <script src="{{ asset('js/mixitup.min.js') }}"></script>
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
    </body>
</html>