<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MM Teknik - Tempat Membeli Keperluan Alat Teknik dan Bangunan</title>
    <meta name="description"
        content="MM Teknik menyediakan berbagai keperluan alat teknik dan bangunan. Temukan produk berkualitas dengan harga terbaik.">
    <meta name="keywords" content="MM Teknik, alat teknik, bangunan, peralatan konstruksi, bahan bangunan">
    <meta name="robots" content="index, follow">
    <meta name="author" content="MM Teknik">

    @livewireStyles
</head>

<body>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('home_page/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('home_page/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('home_page/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('home_page/css/style.css') }}" rel="stylesheet">
    {{ $slot }}

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('home_page/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('home_page/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('home_page/lib/lightbox/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('home_page/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('home_page/js/main.js') }}"></script>
    @livewireScripts
</body>

</html>
