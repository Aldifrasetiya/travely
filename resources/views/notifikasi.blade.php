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

  <style>
    .custom-submit-btn {
      width: 180px;
      height: 50px;
      font-size: 18px;
      font-weight: bold;
      background-color: #007bff;
      border: none;
      border-radius: 1.5rem;
      color: white;
      cursor: pointer;
      margin-left: 170px;
      margin-top: -63px;
      text-align: left; /* Center the text horizontally */
      line-height: 50px; /* Center the text vertically */
    }
    
    .custom-submit-btn:hover {
      background-color: #0056b3;
    }

    .card-header {
      text-align: left;
      margin-left: 5px;
    }

    .card-header h3 {
      margin-bottom: 0.5rem;
      margin-left: 70px;
      font-size: 24px;
    }

    .card-header small {
      font-size: 10px;
      display: block;
      margin-top: -5px;
      margin-left: 30px;
    }

    /* Center the card vertically and horizontally */
    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .card {
      width: 740px;
      height: 390px;
      max-width: 500px;
      margin-top: -430px;
      margin-left: 330px;
      position: relative;
    }

    .card-body {
      margin-top: -15px;
    }

    .back-icon {
      position: absolute;
      top: 15px; /* Adjust the top position */
      left: -80px; /* Adjust the left position */
      font-size: 24px;
      cursor: pointer;
    }

    /* Adjustments for resend OTP link and countdown text */
    .mt-3.text-center {
      margin-top: 10px; /* Adjust top margin */
      font-size: 14px; /* Adjust font size */
      color: #555; /* Adjust text color */
    }

    .mt-3.text-center a {
      color: #007bff; /* Adjust link color */
      text-decoration: none;
    }

    .mt-3.text-center a:hover {
      text-decoration: underline; /* Add underline on hover */
    }

    .circle-container {
      display: flex;
      justify-content: center;
      align-items: center;
      position: absolute;
      top: 50%; /* Center vertically */
      left: 50%; /* Center horizontally */
      transform: translate(-50%, -50%);
    }

    .circle {
      width: 15px;
      height: 15px;
      border-radius: 50%;
      background-color: #6B8A7A; /* Default color for the second and third circles */
      margin-right: 20px;
      margin-top: -340px;
    }

    .circle.primary {
      background-color: #007bff; /* Special color for the first circle */
    }

    .password-criteria {
      font-size: 12px;
      color: #555;
      margin-top: 10px;
      margin-bottom: 5px;
      margin-left: -30px;
    }

    .password-criteria span {
      display: block;
      margin-top: 5px;
    }

    .valid {
      color: green;
    }

    .invalid {
      color: red;
    }

    .form-label {
      margin-top: 20px;
      margin-left: -100px;
      font-size: 14px;
    }

    .form-control {
      font-size: 12px;
    }

    .checkmark-container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100%;
    }

    .checkmark {
      font-size: 100px;
      color: green;
      margin-left: -100px;
      margin-top: -50px;
    }

    .xmark {
      font-size: 100px;
      color: red;
      margin-left: -100px;
      margin-top: -50px;
    }
  </style>

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="{{ asset('style/assets/img/logo1.png') }}" alt="Travely Logo" class="logo-img">
        <span class="d-none d-lg-block">Travely</span>
      </a>
    </div>
    <!-- End Logo -->
  </header>
  <!-- End Header -->

  <main id="main" class="main">
    <div class="container"></div>
    <div class="circle-container">
      <div class="circle primary"></div>
      <div class="circle primary"></div>
      <div class="circle primary"></div>
    </div>

    <div class="card">
      <div class="back-icon" onclick="history.back()">
        <i class="bi bi-arrow-left-circle"></i>
      </div>
      <div class="card-header">
        <h3 id="resultTitle">Ganti Sandi Berhasil</h3>
      </div>
      <div class="card-body">
        <div class="checkmark-container">
          <i id="resultIcon" class="bi bi-check-circle-fill checkmark"></i>
        </div>
      </div>
      <div class="d-grid mt-3">
            <a href="/" class="btn custom-submit-btn">Back</a>
          </div>    
    </div>
  </main>
  <!-- End #main -->

  <!-- Vendor JS Files -->
  <script src="{{ asset('style/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('style/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('style/assets/vendor/chart.js/chart.umd.js') }}"></script>
  <script src="{{ asset('style/assets/vendor/echarts/echarts.min.js') }}"></script>
  <script src="{{ asset('style/assets/vendor/quill/quill.js') }}"></script>
  <script src="{{ asset('style/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
  <script src="{{ asset('style/assets/vendor/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ asset('style/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('style/assets/js/main.js') }}"></script>

  <script>
    // Function to show success or failure icon
    function showResult(success) {
      const resultTitle = document.getElementById('resultTitle');
      const resultIcon = document.getElementById('resultIcon');
      if (success) {
        resultTitle.textContent = 'Ganti Sandi Berhasil';
        resultIcon.classList.remove('bi-x-circle-fill', 'xmark');
        resultIcon.classList.add('bi-check-circle-fill', 'checkmark');
      } else {
        resultTitle.textContent = 'Ganti Sandi Gagal';
        resultIcon.classList.remove('bi-check-circle-fill', 'checkmark');
        resultIcon.classList.add('bi-x-circle-fill', 'xmark');
       }
    }

    // Simulate password change result (for demonstration purposes)
    // Replace this with actual server response handling
    document.addEventListener('DOMContentLoaded', function() {
      // Replace with actual success/failure logic
      const passwordChangeSuccess = false; // Change to true for success scenario
      showResult(passwordChangeSuccess);
    });

    // Toggling password visibility
    function togglePasswordVisibility(inputId, iconId) {
      const input = document.getElementById(inputId);
      const icon = document.getElementById(iconId);
      if (input.type === "password") {
        input.type = "text";
        icon.classList.remove("bi-eye");
        icon.classList.add("bi-eye-slash");
      } else {
        input.type = "password";
        icon.classList.remove("bi-eye-slash");
        icon.classList.add("bi-eye");
      }
    }

    document.getElementById('toggleNewPassword').addEventListener('click', function () {
      togglePasswordVisibility('newPassword', 'toggleNewIcon');
    });

    document.getElementById('toggleConfirmPassword').addEventListener('click', function () {
      togglePasswordVisibility('confirmPassword', 'toggleConfirmIcon');
    });

    // Password validation
    const newPasswordInput = document.getElementById('newPassword');
    const lengthCriteria = document.getElementById('lengthCriteria');
    const uppercaseCriteria = document.getElementById('uppercaseCriteria');
    const lowercaseCriteria = document.getElementById('lowercaseCriteria');
    const numberCriteria = document.getElementById('numberCriteria');
    const specialCharCriteria = document.getElementById('specialCharCriteria');

    newPasswordInput.addEventListener('input', function () {
      const value = newPasswordInput.value;
      const lengthValid = value.length >= 8;
      const uppercaseValid = /[A-Z]/.test(value);
      const lowercaseValid = /[a-z]/.test(value);
      const numberValid = /[0-9]/.test(value);
      const specialCharValid = /[!@#$%^&*(),.?":{}|<>]/.test(value);

      lengthCriteria.classList.toggle('valid', lengthValid);
      lengthCriteria.classList.toggle('invalid', !lengthValid);

      uppercaseCriteria.classList.toggle('valid', uppercaseValid);
      uppercaseCriteria.classList.toggle('invalid', !uppercaseValid);

      lowercaseCriteria.classList.toggle('valid', lowercaseValid);
      lowercaseCriteria.classList.toggle('invalid', !lowercaseValid);

      numberCriteria.classList.toggle('valid', numberValid);
      numberCriteria.classList.toggle('invalid', !numberValid);

      specialCharCriteria.classList.toggle('valid', specialCharValid);
      specialCharCriteria.classList.toggle('invalid', !specialCharValid);
    });

    // Countdown timer for OTP resend
    var resendOtpLink = document.getElementById('resendOtpLink');
    var countdownTimeElement = document.getElementById('countdown-time');
    var countdownSeconds = 30;
    var countdownInterval;

    function startCountdown() {
      countdownInterval = setInterval(function () {
        countdownSeconds--;
        if (countdownSeconds >= 0) {
          countdownTimeElement.textContent = countdownSeconds + ' detik';
        } else {
          stopCountdown();
        }
      }, 1000);
    }

    function stopCountdown() {
      clearInterval(countdownInterval);
      resendOtpLink.textContent = 'Kirim Ulang';
      resendOtpLink.classList.remove('disabled');
      countdownTimeElement.textContent = '';
    }

    resendOtpLink.addEventListener('click', function (event) {
      event.preventDefault();
      if (!resendOtpLink.classList.contains('disabled')) {
        resendOtpLink.classList.add('disabled');
        countdownSeconds = 30;
        startCountdown();
      }
    });

    const otpInputs = document.querySelectorAll('.otp-input');
    otpInputs.forEach((input, index) => {
      input.addEventListener('input', (e) => {
        if (e.target.value.length === 1 && index < otpInputs.length - 1) {
          otpInputs[index + 1].focus();
        }
      });

      input.addEventListener('keydown', (e) => {
        if (e.key === 'Backspace' && e.target.value === '' && index > 0) {
          otpInputs[index - 1].focus();
        }
      });
    });

    startCountdown();
  </script>

</body>

</html>