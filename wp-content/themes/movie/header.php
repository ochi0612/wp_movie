
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taku-movie</title>
    <link rel="icon" type="image/x-icon" href="./wp-content/themes/movie/lib/imgs/logo.png">
<link rel="apple-touch-icon" sizes="180x180" href="./wp-content/themes/movie/lib/imgs/logo.png">　
    <link rel="stylesheet" href="./wp-content/themes/movie/style.css">
    <script type="text/javascript" src="./wp-content/themes/movie/lib/js/action.js"></script>
</head>
<body>

<header>
    <div class="clearfix content-block">
        <a href="#" class="head-logo">
            <img src="./wp-content/themes/movie/lib/imgs/logo_white.png" alt="logo">
        </a>
        <div class="head-menu">
            <a class="menu-trigger" onclick="menuAction()">
                <span></span>
                <span></span>
                <span></span>
            </a>
        </div>
        <nav class="head-nav open">
            <ul class="menu-content">
                <li><a href="#">Welcome</a></li>
                <li><a href="#">Movie</a></li>
                <li><a href="#">About</a></li>
            </ul>
        </nav>
    </div>
</header>
<?php wp_head() ?>