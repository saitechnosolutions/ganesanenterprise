<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/revolution-slider.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="./images/favIcon1.png" type="image/x-icon">
    <!-- <link rel="icon" href="./images/Ganesan Enterprises LOGO.png" type="image/x-icon"> -->
    <link rel="stylesheet" href="css/custom.css">
    <script src="http://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://kit.fontawesome.com/76f334be01.js" crossorigin="anonymous"></script>
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link href="css/responsive.css" rel="stylesheet">
    <meta name="google-site-verification" content="Z-slBnd7uDF-_VPlBBNG_QnW8VhvdznCE6CqzkVbEs0" />
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

</head>

<body>

    @include('layouts.header')

    @section('main-content')

    @show

    @include('layouts.footer')


    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/revolution.min.js"></script>
    <script src="js/jquery.fancybox.pack.js"></script>
    <script src="js/jquery.fancybox-media.js"></script>
    <script src="js/isotope.js"></script>
    <script src="js/owl.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/script.js"></script>
    <script src="js/index.js"></script>
</body>

</html>