@extends('layouts.app')

@section('title', 'Customer Informasi')

@section('content')
    <section id="customer_informasi">
        <div class="container" style="margin-bottom: 50px;">
            <h2 class="pagetitle-1">Customer Informasi</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/home">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Customer Informasi</li>
                </ol>
            </nav>
            <div class="info" style="overflow: auto;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Data Tables</h5>
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Pemesan</th>
                                    <th scope="col">Keberangkatan</th>
                                    <th scope="col">Tujuan</th>
                                    <th scope="col">Tanggal Keberangkatan</th>
                                    <th scope="col">Pilihan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Alexi A</td>
                                    <td>Jakarta</td>
                                    <td>Bandung</td>
                                    <td>2024-06-15</td>
                                    <td>
                                        <button type="button" class="btn btn-warning btnInfo" data-toggle="modal" data-target="#modalInfo" data-pesanan="1">Info Lain</button>
                                        <button type="button" class="btn btn-danger btn-delete">Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Bruno B</td>
                                    <td>Surabaya</td>
                                    <td>Malang</td>
                                    <td>2024-06-16</td>
                                    <td>
                                        <button type="button" class="btn btn-warning btnInfo" data-toggle="modal" data-target="#modalInfo" data-pesanan="2">Info Lain</button>
                                        <button type="button" class="btn btn-danger btn-delete">Hapus</button>
                                    </td>
                                </tr>
                                <!-- Tambahkan data lainnya sesuai kebutuhan -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal untuk Info Lain -->
    <div class="modal fade" id="modalInfo" tabindex="-1" role="dialog" aria-labelledby="modalInfoLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalInfoLabel">Detail Pemesanan</h5>
                    <button type="button" class="position-absolute top-0 start-100 translate-middle" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><strong>Kode Pesanan:</strong> <span id="detailKodePesanan"></span></p>
                    <p><strong>Nama Pemesan:</strong> <span id="detailNamaPemesan"></span></p>
                    <p><strong>Keberangkatan:</strong> <span id="detailKeberangkatan"></span></p>
                    <p><strong>Tujuan:</strong> <span id="detailTujuan"></span></p>
                    <p><strong>Tanggal Keberangkatan:</strong> <span id="detailTanggalKeberangkatan"></span></p>
                    <p><strong>Jumlah Kursi:</strong> <span id="detailJumlahKursi"></span></p>
                    <div id="detailPenumpang">
                        <!-- Penumpang akan ditambahkan secara dinamis di sini -->
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>


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
        // Script untuk menangani tombol Info Lain
        $('.btnInfo').click(function() {
            var pesananId = $(this).data('pesanan');
            var namaPemesan = $('tr:nth-child(' + pesananId + ') td:nth-child(2)').text();
            var keberangkatan = $('tr:nth-child(' + pesananId + ') td:nth-child(3)').text();
            var tujuan = $('tr:nth-child(' + pesananId + ') td:nth-child(4)').text();
            var tanggalKeberangkatan = $('tr:nth-child(' + pesananId + ') td:nth-child(5)').text();
            var jumlahKursi = '5'; // Misalnya, sesuaikan dengan jumlah kursi dari data pemesanan

            // Mengisi modal Info Lain dengan data yang relevan
            $('#detailKodePesanan').text(pesananId);
            $('#detailNamaPemesan').text(namaPemesan);
            $('#detailKeberangkatan').text(keberangkatan);
            $('#detailTujuan').text(tujuan);
            $('#detailTanggalKeberangkatan').text(tanggalKeberangkatan);
            $('#detailJumlahKursi').text(jumlahKursi);

            // Mengosongkan daftar penumpang sebelum menambahkan yang baru
            $('#detailPenumpang').empty();

            // Menambahkan nama pemesan sebagai penumpang pertama
            var penumpangPertama = '<p><strong>Nama Penumpang 1:</strong> ' + namaPemesan + '</p>';
            $('#detailPenumpang').append(penumpangPertama);

            // Menambahkan penumpang lainnya secara dinamis (sesuai jumlah kursi)
            for (var i = 2; i <= parseInt(jumlahKursi); i++) {
                var penumpang = '<p><strong>Nama Penumpang ' + i + ':</strong> Penumpang ' + i + '</p>';
                $('#detailPenumpang').append(penumpang);
            }

            // Menampilkan modal Info Lain
            $('#modalInfo').modal('show');
        });

        // Menghapus backdrop saat modal ditutup
        $('#modalInfo').on('hidden.bs.modal', function () {
            $('body').removeClass('modal-open');
            $('.modal-backdrop').remove();
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
    });

    </script>
@endsection

