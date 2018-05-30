<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/profile/images/favicon.png">
    <title>Sintez Pool - @yield('title')</title>
    @stack('head_styles')
    <!-- Bootstrap Core CSS -->
    <link href="/profile/css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/profile/css/helper.css" rel="stylesheet">
    <link href="/profile/css/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    @stack('head_scripts')
</head>
<body class="fix-header fix-sidebar">
@include('parts.preloader')
@yield('wrapper')
@yield('modal')
    <!-- All Jquery -->
    <script src="/profile/js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="/profile/js/lib/bootstrap/js/popper.min.js"></script>
    <script src="/profile/js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="/profile/js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="/profile/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="/profile/js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="/profile/js/custom.min.js"></script>
    @stack('bottom_scripts')
</body>
</html>