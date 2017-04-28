<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no">
    <meta name="theme-color" content="#455a64">
    <title>Ovl - Main</title>
    <style>
        .for-admin{
            display: none;
        }
    </style>
</head>

<body>
<header>
    <nav class="navbar navbar-toggleable-md navbar-inverse bg-navbar fixed-top">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#menuList" aria-controls="menuList" aria-expanded="false" aria-label="Toggle">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand">
            <img src="https://geam.co/src/img/mini.png" width="30" height="30" alt="">
        </a>
        <div class="collapse navbar-collapse" id="menuList">
            <ul class="navbar-nav" id="menu">
                <li class="nav-item"> <a class="nav-link" href="/">Main</a>
                </li>
                <li class="nav-item"> <a class="nav-link" href="/">News</a>
                </li>
                <li class="nav-item"><a class="nav-link" data-toggle="modal" data-target="#popup" href="">Account</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<br/>
<br/>
<br/>
<div class="container">
<div id="yeah">
    <form class="form-signin">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block send" type="button">Sign in</button>
    </form>
    <div id="msg"></div>
</div>

</div>
<!-- /container -->
<footer class="navbar navbar-inverse bg-navbar fixed-bottom text-center">
    <div>
        <span class="text-white" id="haha"><b>Copyright nakiner, Ovl Ltd.</b></span>
    </div>
</footer>
</body>
<link rel="stylesheet" href="https://geam.co/src/css/bootstrap.min.css">
<link rel="stylesheet" href="https://geam.co/src/css/override.css">
<script src="https://geam.co/src/js/jquery-3.1.1.min.js"></script>
<script src="https://geam.co/src/js/tether.min.js"></script>
<script src="https://geam.co/src/js/bootstrap.min.js"></script>
<script src="https://geam.co/src/js/ovl-worker.js"></script>
<script src="script.js"></script>

</html>