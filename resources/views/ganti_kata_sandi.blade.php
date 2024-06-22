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
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

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
    body {
    font-family: "Open Sans", sans-serif;
    background: #f6f9ff;
    color: #444444;
    overflow: hidden;
    }
    .sidebar {
      background-color: #fff;
      padding: 20px;
      box-shadow: 0px 0 30px rgba(1, 41, 112, 0.1);
      overflow-y: hidden;
      height: 450px;
      margin-top: 70px;
      margin-left: 110px;
      font-size: 13px;
    }

    .sidebar ul {
      list-style-type: none;
      padding: 0;
      text-align: left;
      /* margin-left: -9px; */

    }

    .sidebar a {
      text-decoration: none;
      color: #333;
    }

    .sidebar a:hover {
      text-decoration: underline;
    }

    .content {
      flex-grow: 1;
      padding: 20px;
      min-width: 0;
      overflow-y: hidden;
    }

    .card-2 {
      width: 750px;
      height: 450px;
      margin: 80px auto 30px;
      border: none;
      border-radius: 5px;
      box-shadow: 0px 0 30px rgba(1, 41, 112, 0.1);
      margin-top: 50px;
      background-color: #fff;
      margin-right: 100px;
      position: relative;
      padding-bottom: 20px;
      display: flex;
      flex-direction: column;
    }

    ul {
      list-style-type: none;
      padding: 0;
    }

    a {
      text-decoration: none;
      color: #333;
    }

    a:hover {
      text-decoration: underline;
    }

    .profile-box {
      list-style: none;
    }

    .profile-box .dropdown-menu {
      right: 0;
      left: auto;
    }

    .form-container {
      flex-grow: 1;
      display: flex;
      justify-content: flex-start;
      align-items: center;
      padding: 20px;
    }

    .form-container.form-center {
      justify-content: center;
    }

    .form-container.form-bottom {
      justify-content: flex-end;
    }
    .mb-3:first-child {
  margin-top: 50px; /* Menambahkan margin atas 20px hanya pada elemen pertama */
}
    .mb-3 {
  display: flex;
  align-items: center;
  margin-top: 20px; /* Menambahkan margin atas 20px */
}

    .form-label {
      width: 150px;
      margin-bottom: 0;
      text-align: right;
      margin-right: 10px;
      font-size: 12px;
      margin-left: -10px;
    }

    .form-control {
    flex: none; /* Nonaktifkan pengaturan flex agar properti width dapat bekerja */
    width:  100%; /* Sesuaikan dengan lebar yang diinginkan */
    max-width: 500px; /* Sesuaikan dengan lebar maksimal yang diinginkan */
    font-size: 12px;
    }


    .form-control:focus {
      border-color: #80bdff;
      box-shadow: 0 0 5px rgba(0, 123, 255, 0.25);
      outline: none;
    }

    .btn-primary {
      display: inline-block;
      font-weight: 400;
      color: #fff;
      text-align: center;
      vertical-align: middle;
      user-select: none;
      background-color: #007bff;
      border: 1px solid #007bff;
      padding: 10px 20px;
      font-size: 16px;
      border-radius: 5px;
      transition: background-color 0.3s ease-in-out, border-color 0.3s ease-in-out;
      margin-top: 20px; 
    }

    .btn-primary:hover {
      background-color: #0056b3;
      border-color: #004085;
    }

    .btn-primary:focus, .btn-primary:active {
      background-color: #0056b3;
      border-color: #004085;
      box-shadow: 0 0 5px rgba(0, 123, 255, 0.25);
      outline: none; 
    }

    @media (max-width: 768px) {
      .form-label {
        width: 100px;
      }

      .form-control {
        flex: 1 1 auto;
      }
    }

    .logout-btn {
      background-color: #dc3545;
      color: white;
      border: none;
      padding: 8px 16px;
      border-radius: 5px;
      cursor: pointer;
      margin-top: 280px;
      display: block;
      width: 100%;
      text-align: center;
    }

    .logout-btn:hover {
      background-color: #c82333;
    }

    .btn-light {
      position: absolute;
      bottom: 20px;
      right: 30px;
      background-color: #f8f9fa;
      color: #000;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 14px;
      line-height: 1.5;
      transition: all 0.3s ease;
      text-decoration: none;
      width: 120px; /* Lebar tetap yang diinginkan */
      height: 40px;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 0 15px; /* Padding yang disesuaikan */
      box-sizing: border-box; /* Pastikan padding termasuk dalam lebar tombol */
      white-space: nowrap; /* Mencegah teks membungkus */
      overflow: hidden; /* Mencegah teks keluar dari tombol */
    }

    .btn-light:hover {
      background-color: #e2e6ea;
      border-color: #bbb;
    }

    .btn-light .bi-house {
      margin-right: 6px; /* Kurangi margin untuk menghemat ruang */
    }

    .btn-light:focus {
      outline: none;
    }
    .card-body h4 {
    font-size: 1rem; /* Ubah ukuran font h4 */
    margin-bottom: 20px; /* Berikan margin-bottom pada h4 */
    margin-top: 30px;
  }
/* CSS for Popup */
.popup {
  display: none; /* Hidden by default */
  position: fixed;
  z-index: 999; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  justify-content: center;
  align-items: center;
}

.popup-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
  max-width: 300px;
  border-radius: 10px;
  text-align: center;
}

.popup-content h4 {
  margin-bottom: 20px;
  font-size: 20px;
}

.popup-content .btn {
  margin: 5px;
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

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="{{ asset('style/assets/img/logo1.png') }}" alt="Travely Logo" class="logo-img">
        <span class="d-none d-lg-block">Travely</span>
      </a>
    </div><!-- End Logo -->

    <li class="nav-item dropdown pe-3 nav-profile profile-box" id="profileBox">

      <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" id="profileToggle">
        <img src="{{asset('style/assets/img/profile-img.jpg')}}" alt="Profile" class="rounded-circle">
        <div class="profile-info">
          <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
        </div>
      </a><!-- End Profile Image Icon -->

      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile profile-dropdown" id="profileDropdown">
        <li class="dropdown-header">
          <center>
            <h6>Kevin Anderson</h6>
            <span>KevinAnderson12345@gmail.com</span>
          </center>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>
        <li>
          <a class="dropdown-item d-flex align-items-center" href="/profile">
            <i class="bi bi-person dropdown-icon"></i>
            <span class="dropdown-text">My Profile</span>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>
        <li>
          <a id="logoutBtn" class="dropdown-item d-flex align-items-center" href="/">
            <i class="bi bi-box-arrow-right dropdown-icon"></i>
            <span class="dropdown-text">Log Out</span>
          </a>
        </li>
      </ul>
    </li><!-- End Profile Nav -->

  </header><!-- End Header -->

  <main id="main" class="main d-flex">
    <div class="sidebar">
      <ul>
        <li><a href="/profile">Edit Profile</a></li>
        <hr>
        <li><a href="/gks">Ganti Kata Sandi</a></li>
        <hr>
        <li><button class="logout-btn">Log Out</button></li>
      </ul>
    </div>
    <section class="content flex-grow-1">
      <div class="card-2">
        <div class="card-body text-center">
            <h4>Masukkan Kata Sandi Lama Dan Kata Sandi Baru</h4>
            <hr>
          <form>
          <div class="mb-3">
              <label for="password" class="form-label">Kata Sandi Lama :</label>
              <div class="input-group">
                <input type="password" class="form-control" id="password" placeholder="Masukkan Password Anda" aria-label="password">
                <button type="button" class="btn btn-outline-secondary" id="togglePassword">
                  <i class="bi bi-eye" id="toggleIcon"></i>
                </button>
              </div>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Kata Sandi Baru :</label>
              <div class="input-group">
                <input type="password" class="form-control" id="password" placeholder="Masukkan Password Anda" aria-label="password">
                <button type="button" class="btn btn-outline-secondary" id="togglePassword">
                  <i class="bi bi-eye" id="toggleIcon"></i>
                </button>
              </div>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Konfirmasi Kata Sandi Baru :</label>
              <div class="input-group">
                <input type="password" class="form-control" id="password" placeholder="Masukkan Password Anda" aria-label="password">
                <button type="button" class="btn btn-outline-secondary" id="togglePassword">
                  <i class="bi bi-eye" id="toggleIcon"></i>
                </button>
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
          <a href="/home" class="btn btn-light">
            <i class="bi bi-house"></i> Home
          </a>
        </div>
      </div>
    </section>
  </main><!-- End #main -->
  <!-- Logout Confirmation Popup -->
  <div id="logoutPopup" class="popup">
    <div class="popup-content">
      <h4>Are you sure you want to log out?</h4>
      <a href="/" id="confirmLogout" class="btn btn-danger">Yes</a>
      <button id="cancelLogout" class="btn btn-secondary">No</button>
    </div>
  </div>


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
  <!-- Custom JS -->
  <script>
    document.getElementById('profileToggle').addEventListener('click', function(event) {
      event.preventDefault();
      var profileBox = document.getElementById('profileBox');
      profileBox.classList.toggle('active');
    });
    document.getElementById('togglePassword').addEventListener('click', function() {
      var passwordField = document.getElementById('password');
      var passwordIcon = document.getElementById('toggleIcon');
      if (passwordField.type === 'password') {
        passwordField.type = 'text';
        passwordIcon.classList.remove('bi-eye');
        passwordIcon.classList.add('bi-eye-slash');
      } else {
        passwordField.type = 'password';
        passwordIcon.classList.remove('bi-eye-slash');
        passwordIcon.classList.add('bi-eye');
      }
    });

      // Get elements
    var logoutBtn = document.querySelector('.logout-btn');
    var logoutPopup = document.getElementById('logoutPopup');
    var confirmLogout = document.getElementById('confirmLogout');
    var cancelLogout = document.getElementById('cancelLogout');

    // Show popup when logout button is clicked
    logoutBtn.addEventListener('click', function(event) {
      event.preventDefault();
      logoutPopup.style.display = 'flex';
    });

    // Confirm logout
    confirmLogout.addEventListener('click', function() {
      // Perform logout action (e.g., redirect to logout page)
      window.location.href = '/logout'; // Adjust URL as needed
    });

    // Cancel logout
    cancelLogout.addEventListener('click', function() {
      logoutPopup.style.display = 'none';
    });

    // Hide popup if clicked outside of it
    window.addEventListener('click', function(event) {
      if (event.target == logoutPopup) {
        logoutPopup.style.display = 'none';
      }
    });
    // Ambil elemen tombol logout
    var logoutBtn = document.getElementById('logoutBtn');

    // Tambahkan event listener untuk klik pada tombol logout
    logoutBtn.addEventListener('click', function(event) {
      event.preventDefault(); // Menghentikan tindakan default dari link

      // Tampilkan konfirmasi menggunakan window.confirm()
      var confirmLogout = confirm('Apakah Anda yakin ingin keluar?');

      // Jika pengguna mengonfirmasi (klik OK), arahkan ke halaman logout atau lakukan sesuai kebutuhan
      if (confirmLogout) {
        window.location.href = '/'; // Ganti dengan URL logout Anda
      }
    });
  </script>

</body>

</html>