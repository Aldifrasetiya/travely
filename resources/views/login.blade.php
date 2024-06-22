<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Travely</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('style/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('style/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('style/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('style/assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{asset('style/assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{asset('style/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('style/assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('style/assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <!-- <style>
    body{
      overflow: hidden;
    }
  </style> -->
</head>

<body>
  <main class="main-content">

    <div class="left">
      <img src="{{ asset('style\assets\img\travelyicon.png') }}" alt="">
      <div class="pagetitle">
          <h1>Welcome Back!</h1>
      </div>
      <form action="" class="login-form">
        <div class="row">
          <label for="exampleInputEmail1" class="form-label">Username</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="row">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1">
          <a class="btn btn-primary btn-login" href="/home" role="button">Login</a>
        </div>
        <div>
          <a href="/otp" class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover text-decoration-underline">Forgot Password?</a>
        </div>
      </form>
    
    </div>
    <div class="right"></div>
    <img src="{{ asset('style\assets\img\b.png') }}" class="center-image" alt="Center Image">
    <img src="{{ asset('style\assets\img\login.svg') }}" class="left-bottom-image" alt="Left Bottom Image">
    
  </main><!-- End #main -->
  
  <!-- Vendor JS Files -->
  <script src="{{asset('style/assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{asset('style/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('style/assets/vendor/chart.js/chart.umd.js')}}"></script>
  <script src="{{asset('style/assets/vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{asset('style/assets/vendor/quill/quill.js')}}"></script>
  <script src="{{asset('style/assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
  <script src="{{asset('style/assets/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{asset('style/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('style/assets/js/main.js')}}"></script>

</body>