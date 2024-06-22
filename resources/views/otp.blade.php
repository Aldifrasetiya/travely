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
    .otp-input {
      width: 50px;
      height: 50px;
      font-size: 24px;
      text-align: center;
      margin: 0 5px;
      border: 1px solid #ced4da;
      border-radius: 0.25rem;
    }

    .otp-input:focus {
      border-color: #80bdff;
      outline: 0;
      box-shadow: 0 0 5px rgba(0, 123, 255, 0.25);
    }

    .otp-container {
      display: flex;
      justify-content: center;
      align-items: center;
      margin-top: 20px;
    }

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
      margin-left: 150px;
      margin-top: 5px;
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
      margin-left: -50px;
    }

    .card-header small {
      display: block;
      margin-top: -5px;
      margin-left: -50px;
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

    .back-icon {
      position: absolute;
      top: 15px; /* Adjust the top position */
      left: -80px; /* Adjust the left position */
      font-size: 24px;
      cursor: pointer;
    }

    .countdown {
      font-size: 14px;
      color: #999;
      margin-top: 50px;
      margin-left: 50px;
    }

    .countdown span {
      font-weight: bold;
      color: #555;
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
      top: 50%; /* Menengahkan vertikal */
      left: 50%; /* Menengahkan horizontal */
      transform: translate(-50%, -50%);
    }

    .circle {
      width: 15px;
      height: 15px;
      border-radius: 50%;
      background-color: #6B8A7A; /* Warna default untuk lingkaran kedua dan ketiga */
      margin-right: 20px;
      margin-top: -340px;
    }

    .circle.primary {
      background-color: #007bff; /* Warna khusus untuk lingkaran pertama */
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
    </div><!-- End Logo -->
  </header><!-- End Header -->

  <main id="main" class="main">
    <div class="container"></div>
    <div class="circle-container">
      <div class="circle primary"></div>
      <div class="circle"></div>
      <div class="circle"></div>
    </div>

    <div class="card">
      <div class="back-icon" onclick="history.back()">
        <i class="bi bi-arrow-left-circle"></i>
      </div>
      <div class="card-header text-center">
        <h3>OTP Verification</h3>
        <small>Masukan kode yang kami kirim ke email</small>
        <br>
        <small>KevinAnderson12345@gmail.com</small> <!-- Added email text here -->
      </div>
      <div class="card-body">
        <form>
          <div class="otp-container">
            <input type="text" class="form-control otp-input" id="otp1" maxlength="1">
            <input type="text" class="form-control otp-input" id="otp2" maxlength="1">
            <input type="text" class="form-control otp-input" id="otp3" maxlength="1">
            <input type="text" class="form-control otp-input" id="otp4" maxlength="1">
          </div>
          <div class="countdown" id="countdown">
            Kode OTP dapat dikirim ulang dalam <span id="countdown-time">30 detik</span>
          </div>
          <div class="mt-3 text-center">
            <p>Tidak menerima kode OTP? <a href="#" id="resendOtpLink">Kirim Ulang</a></p>
          </div>
          <div class="d-grid mt-3">
            <a href="/sb" class="btn custom-submit-btn">Verify</a>
          </div>
        </form>
      </div>
    </div>
  </main><!-- End #main -->

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
    // Ambil elemen link Kirim Ulang
    var resendOtpLink = document.getElementById('resendOtpLink');
    var countdownTimeElement = document.getElementById('countdown-time');
    var countdownSeconds = 30; // Waktu dalam detik untuk countdown
    var countdownInterval; // Variabel untuk menyimpan interval countdown

    // Fungsi untuk memulai countdown
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

    // Fungsi untuk menghentikan countdown
    function stopCountdown() {
      clearInterval(countdownInterval);
      resendOtpLink.textContent = 'Kirim Ulang';
      resendOtpLink.classList.remove('disabled');
      countdownTimeElement.textContent = '';
    }

    // Tambahkan event listener untuk klik pada link Kirim Ulang
    resendOtpLink.addEventListener('click', function (event) {
      event.preventDefault(); // Menghentikan tindakan default dari link
      if (!resendOtpLink.classList.contains('disabled')) {
        resendOtpLink.classList.add('disabled'); // Menonaktifkan link selama countdown berjalan
        countdownSeconds = 30; // Reset waktu countdown
        startCountdown(); // Memulai countdown
      }
    });

    // Automatically move to the next input field
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

    // Mulai countdown saat halaman dimuat pertama kali
    startCountdown();
  </script>
</body>

</html>