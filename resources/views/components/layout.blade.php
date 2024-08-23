<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-style-mode" content="1"> <!-- 0 == light, 1 == dark -->

    <title>
        @isset($title)
        {{ $title }} | Agcenna
        @else
        Laravel 11
        @endisset
    </title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/template/assets/webp/logo/favicon.webp') }}">
    <!-- CSS ============================================ -->
    <link rel="stylesheet" href="{{ asset('/template/assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/template/assets/css/plugins/animation.css') }}">
    <link rel="stylesheet" href="{{ asset('/template/assets/css/plugins/feature.css') }}">
    <link rel="stylesheet" href="{{ asset('/template/assets/css/plugins/magnify.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/template/assets/css/plugins/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('/template/assets/css/plugins/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('/template/assets/css/plugins/lightbox.css') }}">
    <link rel="stylesheet" href="{{ asset('/template/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/template/assets/css/mystyle.css') }}">

    <!-- font awesome -->
    <link href="https://cdn.jsdelivr.net/gh/hung1001/font-awesome-pro@4cac1a6/css/all.css" rel="stylesheet" type="text/css" />

    <style>
        .page-link {
            background: transparent;
            border: none;
            color: #fff;
            border-radius: 4px;
        }

        .page-item {
            width: 40px;
            margin: auto 8px;
            text-align: center;
            border-radius: 4px;
            overflow: hidden;
        }

        .page-link:hover {
            background: linear-gradient(95deg, var(--color-primary) 15%, var(--color-tertiary) 45%, var(--color-pink) 75%, var(--color-secondary) 100%) 95% / 200% 100%;
            color: #fff;
        }


        .page-item.disabled .page-link {
            background: transparent;
        }

        .page-item.active .page-link {
            background: linear-gradient(95deg, var(--color-primary) 15%, var(--color-tertiary) 45%, var(--color-pink) 75%, var(--color-secondary) 100%) 95% / 200% 100%;
        }
    </style>
</head>

<body>
    <main class="page-wrapper">
        <x-header>
        </x-header>
        <x-pop-mobile></x-pop-mobile>

        <!-- Start Theme Style  -->
        <div>
            <div class="rainbow-gradient-circle"></div>
            <div class="rainbow-gradient-circle theme-pink"></div>
        </div>
        <!-- End Theme Style  -->


        <!-- Start Seperator Area  -->
        <div class="rbt-separator-mid">
            <div class="container">
                <hr class="rbt-separator m-0">
            </div>
        </div>
        <!-- End Seperator Area  -->

        {{ $slot }}

        <x-footer></x-footer>
    </main>

    <!-- All Scripts  -->
    <!-- Start Top To Bottom Area  -->
    <div class="rainbow-back-top">
        <i class="feather-arrow-up"></i>
    </div>
    <!-- End Top To Bottom Area  -->
    <!-- JS
 ============================================ -->
    <x-script></x-script>
</body>

</html>