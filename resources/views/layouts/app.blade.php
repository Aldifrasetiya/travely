<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travely</title>

    <!-- Favicons -->
    <link href="{{ asset('style/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('style/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
    

    <!-- Bootstrap CSS from CDN and Local -->
    <link href="{{ asset('style/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('style/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/css/bootstrap.min.css" rel="stylesheet">


    <!-- Other Vendor CSS -->
    <link href="{{ asset ('style/assets/vendor/bootstrap/css/bootstrap.min.css') }} rel="stylesheet">
    <link href="{{ asset ('style/assets/vendor/bootstrap-icons/bootstrap-icons.css')}} rel="stylesheet">
    <link href="{{ asset ('style/assets/vendor/boxicons/css/boxicons.min.css')}} rel="stylesheet">
    <link href="{{ asset ('style/assets/vendor/quill/quill.snow.css')}} rel="stylesheet">
    <link href="{{ asset ('style/assets/vendor/quill/quill.bubble.css')}} rel="stylesheet">
    <link href="{{ asset ('style/assets/vendor/remixicon/remixicon.css')}} rel="stylesheet">
    <link href="{{ asset ('style/assets/vendor/simple-datatables/style.css')}} rel="stylesheet">

    <!-- <link href="{{ asset('style/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('style/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('style/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('style/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('style/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('style/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet"> -->

    <!-- Custom Styles -->
    <link href="{{ asset('style/assets/css/style.css') }}" rel="stylesheet">

    <style>
        /* Set top padding below the header */
        main {
            padding: 80px;

        }
    </style>
</head>
<body>

    @include('header') <!-- Include your header blade file -->

    <main>
        @yield('content') <!-- Content section for individual pages -->
    </main>

    <!-- Vendor Scripts -->
    <script src="{{ asset('style/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('style/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('style/assets/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('style/assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('style/assets/vendor/quill/quill.js') }}"></script>
    <script src="{{ asset('style/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('style/assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('style/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Custom Scripts -->
    <script src="{{ asset('style/assets/js/main.js') }}"></script>

    <!-- jQuery from CDN and Local -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Yield specific scripts for each page -->
    @yield('scripts') <!-- This will yield scripts specific to each page -->

</body>
</html>

