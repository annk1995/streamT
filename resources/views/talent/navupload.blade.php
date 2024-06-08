<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from askbootstrap.com/preview/vidoe-v2-3/upload.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Apr 2024 17:10:45 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Askbootstrap">
<meta name="author" content="Askbootstrap">
<title>project x</title>

<link rel="icon" type="image/png" href="img/favicon.png">

<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

<link href="{{ asset('assets/css/all.min.css') }}" rel="stylesheet" type="text/css">

<link href="{{ asset('assets/css/osahan.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('assets/css/sighup/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/sighup/fontawesome/all.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/sighup/bootstrap-datepicker3.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/sighup/signup-form.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('assets/css/sighup/signup-form-modern.css') }}" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/owl.theme.css') }}">
{{--
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

<link href="css/osahan.css" rel="stylesheet">

<link rel="stylesheet" href="vendor/owl-carousel/owl.carousel.css">
<link rel="stylesheet" href="vendor/owl-carousel/owl.theme.css"> --}}
</head>
<body id="page-top">
<nav class="navbar navbar-expand navbar-light bg-white static-top osahan-nav sticky-top">
&nbsp;&nbsp;
<button class="btn btn-link btn-sm text-secondary order-1 order-sm-0" id="sidebarToggle">
<i class="fas fa-bars"></i>
</button> &nbsp;&nbsp;
<a class="navbar-brand mr-1" href="index.html"><img class="img-fluid" alt src="img/logo.png"></a>

<form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-5 my-2 my-md-0 osahan-navbar-search">
<div class="input-group">
<input type="text" class="form-control" placeholder="Search for...">
<div class="input-group-append">
<button class="btn btn-light" type="button">
<i class="fas fa-search"></i>
</button>
</div>
</div>
</form>

<ul class="navbar-nav ml-auto ml-md-0 osahan-right-navbar">
<li class="nav-item mx-1">
<a class="nav-link" href="upload.html">
<i class="fas fa-plus-circle fa-fw"></i>
Upload Video
</a>
</li>
<li class="nav-item dropdown no-arrow mx-1">
<a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="fas fa-bell fa-fw"></i>
<span class="badge badge-danger">9+</span>
</a>
<div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
<a class="dropdown-item" href="#"><i class="fas fa-fw fa-edit "></i> &nbsp; Action</a>
<a class="dropdown-item" href="#"><i class="fas fa-fw fa-headphones-alt "></i> &nbsp; Another action</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="#"><i class="fas fa-fw fa-star "></i> &nbsp; Something else here</a>
</div>
</li>
<li class="nav-item dropdown no-arrow mx-1">
<a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="fas fa-envelope fa-fw"></i>
<span class="badge badge-success">7</span>
</a>
<div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
<a class="dropdown-item" href="#"><i class="fas fa-fw fa-edit "></i> &nbsp; Action</a>
<a class="dropdown-item" href="#"><i class="fas fa-fw fa-headphones-alt "></i> &nbsp; Another action</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="#"><i class="fas fa-fw fa-star "></i> &nbsp; Something else here</a>
</div>
</li>
<li class="nav-item dropdown no-arrow osahan-right-navbar-user">
<a class="nav-link dropdown-toggle user-dropdown-link" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<img alt="Avatar" src="img/user.png">
Osahan
</a>
<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
<a class="dropdown-item" href="account.html"><i class="fas fa-fw fa-user-circle"></i> &nbsp; My Account</a>
<a class="dropdown-item" href="subscriptions.html"><i class="fas fa-fw fa-video"></i> &nbsp; Subscriptions</a>
<a class="dropdown-item" href="settings.html"><i class="fas fa-fw fa-cog"></i> &nbsp; Settings</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal"><i class="fas fa-fw fa-sign-out-alt"></i> &nbsp; Logout</a>
</div>
</li>
</ul>
</nav>
<div id="wrapper">

<ul class="sidebar navbar-nav">
<li class="nav-item active">
<a class="nav-link" href="index.html">
<i class="fas fa-fw fa-home"></i>
<span>Home</span>
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="channels.html">
<i class="fas fa-fw fa-users"></i>
<span>Channels</span>
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="single-channel.html">
<i class="fas fa-fw fa-user-alt"></i>
<span>Single Channel</span>
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="video-page.html">
<i class="fas fa-fw fa-video"></i>
<span>Video Page</span>
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="upload-video.html">
<i class="fas fa-fw fa-cloud-upload-alt"></i>
<span>Upload Video</span>
</a>
</li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="fas fa-fw fa-folder"></i>
<span>Pages</span>
</a>
<div class="dropdown-menu">
<h6 class="dropdown-header">Login Screens:</h6>
<a class="dropdown-item" href="login.html">Login</a>
<a class="dropdown-item" href="register.html">Register</a>
<a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
<div class="dropdown-divider"></div>
<h6 class="dropdown-header">Other Pages:</h6>
<a class="dropdown-item" href="blog.html">Blog</a>
<a class="dropdown-item" href="blog-detail.html">Blog Detail</a>
<a class="dropdown-item" href="blank.html">Blank Page</a>
<a class="dropdown-item" href="404.html">404 Page</a>
<a class="dropdown-item" href="contact.html">Contact</a>
</div>
</li>
<li class="nav-item">
<a class="nav-link" href="history-page.html">
<i class="fas fa-fw fa-history"></i>
<span>History Page</span>
</a>
</li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="categories.html" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="fas fa-fw fa-list-alt"></i>
<span>Categories</span>
</a>
<div class="dropdown-menu">
<a class="dropdown-item" href="categories.html">Movie</a>
<a class="dropdown-item" href="categories.html">Music</a>
<a class="dropdown-item" href="categories.html">Television</a>
</div>
</li>
<li class="nav-item channel-sidebar-list">
<h6>SUBSCRIPTIONS</h6>
<ul>
<li>
<a href="subscriptions.html">
<img class="img-fluid" alt src="img/s1.png"> Your Life
</a>
</li>
<li>
<a href="subscriptions.html">
<img class="img-fluid" alt src="img/s2.png"> Unboxing <span class="badge badge-warning">2</span>
</a>
</li>
<li>
<a href="subscriptions.html">
<img class="img-fluid" alt src="img/s3.png"> Product / Service
</a>
</li>
</ul>
</li>
</ul>
<div id="content-wrapper">
<div class="container-fluid pt-5 pb-5">
<div class="row">
<div class="col-md-8 mx-auto text-center upload-video pt-5 pb-5">
<h1><i class="fas fa-file-upload text-primary"></i></h1>
<h4 class="mt-5">Select Video files to upload</h4>
<p class="land">or drag and drop video files</p>
<div class="mt-4">
<a class="btn btn-outline-primary" href="upload-video.html">Upload Video</a>
</div>
</div>
</div>
</div>


<footer class="sticky-footer">
<div class="container">
<div class="row no-gutters">
{{-- <div class="col-lg-6 col-sm-6">
<p class="mt-1 mb-0">&copy; Copyright 2020 <strong class="text-dark">Vidoe</strong>. All Rights Reserved<br>
<small class="mt-0 mb-0">Made with <i class="fas fa-heart text-danger"></i> by <a class="text-primary" target="_blank" href="https://askbootstrap.com/">Ask Bootstrap</a>
</small> --}}
</p>
</div>
<div class="col-lg-6 col-sm-6 text-right">
<div class="app">
<a href="#"><img alt src="img/google.png"></a>
<a href="#"><img alt src="img/apple.png"></a>
</div>
</div>
</div>
</div>
</footer>
</div>

</div>


<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>

<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-sm modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
<button class="close" type="button" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
<div class="modal-footer">
<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
<a class="btn btn-primary" href="login.html">Logout</a>
</div>
</div>
</div>
</div>
<script src="{{ asset('assets/js.jquery.min.js') }}" type="310bf9012176813d10c747da-text/javascript"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}" type="310bf9012176813d10c747da-text/javascript"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="{{ asset('assets/js/jquery.easing.min.js') }}" type="310bf9012176813d10c747da-text/javascript"></script>

<script src="{{ asset('assets/js/owl.carousel.js') }}" type="310bf9012176813d10c747da-text/javascript"></script>

<script src="{{ asset('assets/js/custom.js') }}" type="310bf9012176813d10c747da-text/javascript"></script>

<script src="{{ asset('assets/js/signup/jquery-3.5.1.min.js')}}"></script>

<script src="{{ asset('assets/js/rocket-loader.min.js') }}"
    data-cf-settings="310bf9012176813d10c747da-|49" defer></script>
{{--
<script src="vendor/jquery/jquery.min.js" type="58b0ed656495d557dde52d18-text/javascript"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js" type="58b0ed656495d557dde52d18-text/javascript"></script>

<script src="vendor/jquery-easing/jquery.easing.min.js" type="58b0ed656495d557dde52d18-text/javascript"></script>

<script src="vendor/owl-carousel/owl.carousel.js" type="58b0ed656495d557dde52d18-text/javascript"></script>

<script src="js/custom.js" type="58b0ed656495d557dde52d18-text/javascript"></script>
<script src="https://askbootstrap.com/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="58b0ed656495d557dde52d18-|49" defer></script><script defer src="../../../static.cloudflareinsights.com/beacon.min.js/v55bfa2fee65d44688e90c00735ed189a1713218998793" integrity="sha512-FIKRFRxgD20moAo96hkZQy/5QojZDAbyx0mQ17jEGHCJc/vi0G2HXLtofwD7Q3NmivvP9at5EVgbRqOaOQb+Rg==" data-cf-beacon='{"rayId":"878f7680ccc04182","r":1,"version":"2024.3.0","token":"dd471ab1978346bbb991feaa79e6ce5c"}' crossorigin="anonymous"></script> --}}
</body>

<!-- Mirrored from askbootstrap.com/preview/vidoe-v2-3/upload.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Apr 2024 17:10:45 GMT -->
</html>