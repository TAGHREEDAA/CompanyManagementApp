<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- bootstrap using bootstarp 3-->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <!-- javascript-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
</head>
<body>
<header>
<div class="container">
    <div class="row">
        <div class="overlay">
        <a href="" class="brand pull-left">WeTaxi</a>
        <ul class="list-inline list-unstyled pull-right">

            <li><a href="">Home</a></li>
            <li><a href="">Contact Us</a></li>
            <li><a href="">About Us</a></li>

        </ul>
    </div>
</div>
</div>
</header>

@yield('content')

@yield('section')



<footer>
    <div class="container">
        <div class="col-sm-2">
            <ul class="list-unstyled">
                <li><a href=""></a></li>
            </ul>
        </div>
        <div class="col-sm-2">
            <h4>The Company</h4>
            <ul class="list-unstyled">
                <li><a href="">Twitter</a></li>
                <li><a href="">Facebook</a></li>
                <li><a href="">Instagram</a></li>
            </ul>
        </div>
        <div class="col-sm-2">
            <h4>Social</h4>
            <ul class="list-unstyled">
                <li><a href="">Twitter</a></li>
                <li><a href="">Facebook</a></li>
                <li><a href="">Instagram</a></li>
            </ul>
        </div>
        <div class="col-sm-4">
            <h4>Support</h4>
            <ul class="list-unstyled">
                <li><a href="">Twitter</a></li>
                <li><a href="">Facebook</a></li>
                <li><a href="">Instagram</a></li>
            </ul>
        </div>
        <div class="col-sm-2">
            <h4>Address</h4>
            <ul class="list-unstyled">
                <li><a href="">Twitter</a></li>
                <li><a href="">Facebook</a></li>
                <li><a href="">Instagram</a></li>
            </ul>
        </div>
    </div>
</footer>

</body>
</html>
