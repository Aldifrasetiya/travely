@extends('layouts.app')

  <main class="main d-flex main-profile">
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
          <div class="header-box">
          <img src="{{ asset('style/assets/img/profile-img.jpg') }}" alt="Profile Picture" class="profile-picture" id="profileImage" data-bs-placement="bottom" data-bs-toggle="tooltip" title="Ubah Foto Profil">
            <input type="file" id="fileInput" style="display:none;" accept="image/*">
          </div>
          <form>
            <div class="mb-3">
              <label for="namaLengkap" class="form-label">Nama Lengkap :</label>
              <input type="text" class="form-control" id="namaLengkap" placeholder="Masukkan Nama Lengkap Anda" aria-label="default input example">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email :</label>
              <input type="email" class="form-control" id="email" placeholder="name@gmail.com">
            </div>
            <div class="mb-3">
              <label for="noTelepon" class="form-label">No.Telepon :</label>
              <input type="text" class="form-control" id="noTelepon" placeholder="Masukkan No.Telepon Anda" aria-label="default input example">
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