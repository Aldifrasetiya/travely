@extends('layouts.app')

@section('title', 'Feedback Customer')

@section('content')
    <section id="feedback_customer">
        <div class="container" style="margin-bottom: 50px;">
            <h2 class="pagetitle-1">Feedback Customer</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/home">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Feedback Customer</li>
                </ol>
            </nav>
            <div class="info" style="overflow: auto;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Feedback Table</h5>
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Customer</th>
                                    <th scope="col">Penilaian</th>
                                    <th scope="col">Feedback</th>
                                    <th scope="col">Pilihan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Aisya Nurul Azkia</td>
                                    <td>Bagus</td>
                                    <td>Saya senang dengan pelayanannya. Semua kebutuhan saya terpenuhi dengan cepat dan profesional.</td>
                                    <td>
                                        <button type="button" class="btn btn-danger btn-delete">Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Budi Santoso Prasetyo</td>
                                    <td>Sangat Bagus</td>
                                    <td>Pengalaman luar biasa! Tim sangat membantu dan ramah. Pasti akan merekomendasikan ke teman-teman.</td>
                                    <td>
                                        <button type="button" class="btn btn-danger btn-delete">Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Chandra Aditya Wijaya</td>
                                    <td>Cukup Bagus</td>
                                    <td>Layanannya cukup memuaskan, walau ada beberapa hal kecil yang bisa ditingkatkan.</td>
                                    <td>
                                        <button type="button" class="btn btn-danger btn-delete">Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Dewi Anggraini Putri</td>
                                    <td>Kurang</td>
                                    <td>Pelayanan agak lambat dan kurang responsif. Banyak hal yang harus diperbaiki agar lebih memuaskan.</td>
                                    <td>
                                        <button type="button" class="btn btn-danger btn-delete">Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Eko Suprianto Suryadi</td>
                                    <td>Sangat Kurang</td>
                                    <td>Sangat kecewa dengan pelayanan yang diterima. Banyak perbaikan yang dibutuhkan.</td>
                                    <td>
                                        <button type="button" class="btn btn-danger btn-delete">Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>Fina Marlina Utami</td>
                                    <td>Bagus</td>
                                    <td>Layanannya cukup baik, tapi ada beberapa aspek yang bisa ditingkatkan.</td>
                                    <td>
                                        <button type="button" class="btn btn-danger btn-delete">Hapus</button>
                                    </td>
                                </tr>                         
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

        // Script for handling adding data
        document.getElementById('btnTambahData').addEventListener('click', function() {
            // Example of handling adding data
            var newData = '<tr><th scope="row">7</th><td>New Customer</td><td>Bagus</td><td>New Feedback</td><td><button type="button" class="btn btn-danger btn-delete">Hapus</button></td></tr>';
            document.querySelector('.datatable tbody').insertAdjacentHTML('beforeend', newData);
            addDeleteEvent(); // Call the function to re-attach delete event listener to the new row
        });
    </script>
@endsection
