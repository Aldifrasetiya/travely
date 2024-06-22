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



<!-- Custom JS -->
<script>
    document.getElementById('profileToggle').addEventListener('click', function(event) {
      event.preventDefault();
      var profileBox = document.getElementById('profileBox');
      profileBox.classList.toggle('active');
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
