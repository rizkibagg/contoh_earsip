@extends('layout.master')

@section('content')
    <div class="pagetitle">
        <h1>Surat Masuk</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active">Surat Masuk</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">

            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="card-title">Data Surat Masuk</h5>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#tambah-surat-masuk"><i class="fa-regular fa-square-plus" style="margin-right: 5px"></i>Tambah Data</button>

                            <!-- Modal -->
                            <div class="modal fade" id="tambah-surat-masuk" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="tambah-surat-masuk-Label" aria-hidden="true">
                                <div class="modal-dialog modal-lg ">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="tambah-surat-masuk-Label">Data Surat Masuk</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="row" action="/surat-masuk" method="POST">
                                                @csrf
                                                <div class="row mb-3">
                                                    <label for="nomor_antrian" class="col-sm-3 col-form-label">Nomor Antrian</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="nomor_antrian" name="nomor_antrian" placeholder="000" required>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="nomor_surat" class="col-sm-3 col-form-label">Nomor Surat</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="nomor_surat" name="nomor_surat" placeholder="000" required>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="keperluan" class="col-sm-3 col-form-label">Keperluan</label>
                                                    <div class="col-sm-9">
                                                        <textarea type="text" name="keperluan" class="form-control" id="keperluan" rows="2" required></textarea>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="dituju_kepada" class="col-sm-3 col-form-label">Dituju Kepada</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="dituju_kepada" class="form-control" id="dituju_kepada" required>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="tanggal_surat" class="col-sm-3 col-form-label">Tanggal Surat</label>
                                                    <div class="col-sm-3">
                                                        <input type="date" class="form-control" id="tanggal_surat" name="tanggal_surat" required>
                                                    </div>
                                                    <label for="tanggal_kegiatan" class="col-sm-3 col-form-label text-center">Tanggal Kegiatan</label>
                                                    <div class="col-sm-3">
                                                        <input type="date" class="form-control" id="tanggal_kegiatan" name="tanggal_kegiatan" required>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="lampiran" class="col-sm-3 col-form-label">Lampiran</label>
                                                    <div class="col-sm-9">
                                                        <input type="file" name="lampiran" class="form-control" id="lampiran" required>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Table with hoverable rows -->
                        <table class="table table-hover datatable">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Nomor Surat</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">NIK</th>
                                    <th scope="col" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>001/PEM/IX/2023</td>
                                    <td>Rizki</td>
                                    <td>30303030303</td>
                                    <td  class="text-center">
                                        <a class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                                        <a class="btn btn-danger btn-sm"><i class="fa-regular fa-trash-can"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- End Table with hoverable rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
