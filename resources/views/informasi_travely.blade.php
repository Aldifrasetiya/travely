@extends('layouts.app')

@section('title', 'Informasi Travely')

@section('content')
    <section id="informasi-travely">
        <div class="container-its">
            <h2 class="pagetitle-1">Informasi Travely</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/home">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Informasi Travely</li>
                </ol>
            </nav>
            <div class="info" style="overflow: auto;">
                    <!-- Tambahkan tombol untuk menambahkan data -->
                <button class="btn btn-primary mb-3" id="btnTambahData">Tambah Data Travely</button>
                
                    <!-- Modal untuk tambah data -->
                    <div class="modal fade" id="modalTambahData" tabindex="-1" aria-labelledby="modalTambahDataLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalTambahDataLabel">Tambah Data Travely</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- Form tambah data -->
                                    <form id="formTambahData">
                                        <div class="mb-3">
                                            <label for="jenisKendaraan" class="form-label">Jenis Kendaraan</label>
                                            <input type="text" class="form-control" id="jenisKendaraan" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="keberangkatan" class="form-label">Keberangkatan</label>
                                            <input type="text" class="form-control" id="keberangkatan" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="tujuan" class="form-label">Tujuan</label>
                                            <input type="text" class="form-control" id="tujuan" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="jumlahTiket" class="form-label">Jumlah Tiket</label>
                                            <input type="number" class="form-control" id="jumlahTiket" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="tanggalPesanan" class="form-label">Tanggal Pesanan</label>
                                            <input type="date" class="form-control" id="tanggalPesanan" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="jamKeberangkatan" class="form-label">Jam Keberangkatan</label>
                                            <input type="time" class="form-control" id="jamKeberangkatan" required>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal untuk edit data -->
                    <div class="modal fade" id="modalEditData" tabindex="-1" aria-labelledby="modalEditDataLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalEditDataLabel">Edit Data Travely</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- Form edit data -->
                                    <form id="formEditData">
                                        <input type="hidden" id="editDataId">
                                        <div class="mb-3">
                                            <label for="editJenisKendaraan" class="form-label">Jenis Kendaraan</label>
                                            <input type="text" class="form-control" id="editJenisKendaraan" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="editKeberangkatan" class="form-label">Keberangkatan</label>
                                            <input type="text" class="form-control" id="editKeberangkatan" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="editTujuan" class="form-label">Tujuan</label>
                                            <input type="text" class="form-control" id="editTujuan" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="editJumlahTiket" class="form-label">Jumlah Tiket</label>
                                            <input type="number" class="form-control" id="editJumlahTiket" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="editTanggalPesanan" class="form-label">Tanggal Pesanan</label>
                                            <input type="date" class="form-control" id="editTanggalPesanan" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="editJamKeberangkatan" class="form-label">Jam Keberangkatan</label>
                                            <input type="time" class="form-control" id="editJamKeberangkatan" required>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal konfirmasi hapus -->
                    <div class="modal fade" id="modalKonfirmasiHapus" tabindex="-1" aria-labelledby="modalKonfirmasiHapusLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalKonfirmasiHapusLabel">Konfirmasi Hapus Data</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Anda yakin ingin menghapus data ini?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                    <button type="button" class="btn btn-danger" id="btnKonfirmasiHapus">Hapus</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tabel untuk menampilkan data -->
                    <div class="card">
                        <div class="card-body card-body-itr">
                            <h5 class="card-title card-title-itr">Data Tables</h5>
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Jenis Kendaraan</th>
                                        <th scope="col">Keberangkatan</th>
                                        <th scope="col">Tujuan</th>
                                        <th scope="col">Jumlah Tiket</th>
                                        <th scope="col">Tanggal Pesananan</th>
                                        <th scope="col">Jam Keberangkatan</th>
                                        <th scope="col">Pilihan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Contoh baris data -->
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mini Bus</td>
                                        <td>Jakarta</td>
                                        <td>Bandung</td>
                                        <td>5</td>
                                        <td>2024-06-15</td>
                                        <td>08:00</td>
                                        <td>
                                            <button type="button" class="btn btn-primary btnEditData">Edit</button>
                                            <button type="button" class="btn btn-danger btn-delete">Hapus</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Elf</td>
                                        <td>Surabaya</td>
                                        <td>Malang</td>
                                        <td>8</td>
                                        <td>2024-06-17</td>
                                        <td>10:30</td>
                                        <td>
                                            <button type="button" class="btn btn-primary btnEditData">Edit</button>
                                            <button type="button" class="btn btn-danger btn-delete">Hapus</button>
                                        </td>
                                    </tr>
                                    <!-- Akhir dari contoh baris data -->
                                </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('styles')
    @parent
    <!-- Include your custom styles here -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.css">

@endsection

@section('scripts')
    @parent
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    <script>
        $(document).ready(function() {
                        // Menampilkan modal tambah data saat tombol tambah data diklik
                        $('#btnTambahData').click(function() {
                $('#modalTambahData').modal('show');
            });

            // Mereset form tambah data saat modal ditutup
            $('#modalTambahData').on('hidden.bs.modal', function () {
                $('#formTambahData').trigger('reset');
            });

            // Menangani submit form tambah data
            $('#formTambahData').submit(function(e) {
                e.preventDefault(); // Menghentikan perilaku default submit form

                // Ambil nilai dari input
                var jenisKendaraan = $('#jenisKendaraan').val().trim();
                var keberangkatan = $('#keberangkatan').val().trim();
                var tujuan = $('#tujuan').val().trim();
                var jumlahTiket = $('#jumlahTiket').val().trim();
                var tanggalPesanan = $('#tanggalPesanan').val().trim();
                var jamKeberangkatan = $('#jamKeberangkatan').val().trim();

                // Buat baris baru untuk tabel
                var newRow = '<tr>' +
                    '<th scope="row">3</th>' + // Ganti nomor urutan sesuai dengan jumlah baris yang ada
                    '<td>' + jenisKendaraan + '</td>' +
                    '<td>' + keberangkatan + '</td>' +
                    '<td>' + tujuan + '</td>' +
                    '<td>' + jumlahTiket + '</td>' +
                    '<td>' + tanggalPesanan + '</td>' +
                    '<td>' + jamKeberangkatan + '</td>' +
                    '<td>' +
                        '<button type="button" class="btn btn-primary btnEditData">Edit</button> ' +
                        '<button type="button" class="btn btn-danger btnHapusData">Hapus</button>' +
                    '</td>' +
                    '</tr>';

                // Tambahkan baris baru ke tabel
                $('.datatable tbody').append(newRow);

                // Sembunyikan modal tambah data
                $('#modalTambahData').modal('hide');
            });

            // Menampilkan modal edit data saat tombol edit data diklik
            $(document).on('click', '.btnEditData', function() {
                var row = $(this).closest('tr'); // Ambil baris terdekat dari tombol edit
                var id = row.find('th').text().trim(); // Ambil ID data dari kolom pertama

                // Isi nilai pada modal edit data sesuai dengan data yang ada
                $('#editDataId').val(id);
                $('#editJenisKendaraan').val(row.find('td:eq(1)').text().trim());
                $('#editKeberangkatan').val(row.find('td:eq(2)').text().trim());
                $('#editTujuan').val(row.find('td:eq(3)').text().trim());
                $('#editJumlahTiket').val(row.find('td:eq(4)').text().trim());
                $('#editTanggalPesanan').val(row.find('td:eq(5)').text().trim());
                $('#editJamKeberangkatan').val(row.find('td:eq(6)').text().trim());

                // Tampilkan modal edit data
                $('#modalEditData').modal('show');
            });

            // Menangani submit form edit data
            $('#formEditData').submit(function(e) {
                e.preventDefault(); // Menghentikan perilaku default submit form

                // Ambil nilai dari input
                var id = $('#editDataId').val().trim();
                var jenisKendaraan = $('#editJenisKendaraan').val().trim();
                var keberangkatan = $('#editKeberangkatan').val().trim();
                var tujuan = $('#editTujuan').val().trim();
                var jumlahTiket = $('#editJumlahTiket').val().trim();
                var tanggalPesanan = $('#editTanggalPesanan').val().trim();
                var jamKeberangkatan = $('#editJamKeberangkatan').val().trim();

                // Update baris data di tabel
                var row = $('.datatable tbody').find('tr').eq(id - 1);
                row.find('td:eq(0)').text(id);
                row.find('td:eq(1)').text(jenisKendaraan);
                row.find('td:eq(2)').text(keberangkatan);
                row.find('td:eq(3)').text(tujuan);
                row.find('td:eq(4)').text(jumlahTiket);
                row.find('td:eq(5)').text(tanggalPesanan);
                row.find('td:eq(6)').text(jamKeberangkatan);

                // Sembunyikan modal edit data
                $('#modalEditData').modal('hide');
            });
        });

        // Function to add delete event listener
        function addDeleteEvent() {
            document.querySelectorAll('.btn-delete').forEach(function(button) {
                button.addEventListener('click', function() {
                    var row = this.closest('tr');
                    swal({
                        title: "Apakah Anda yakin?",
                        text: "Data yang dihapus tidak dapat dikembalikan!",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            row.remove();
                            swal("Data berhasil dihapus!", {
                                icon: "success",
                            });
                        }
                    });
                });
            });
        }

        // Initial call to addDeleteEvent
        addDeleteEvent();


    </script>

    <!-- <script src="{{asset('assets/js/plugin/datatables/datatables.min.js')}}"></script> -->
@endsection
