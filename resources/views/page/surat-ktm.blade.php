@extends('layout.master')

@section('content')
    <div class="pagetitle">
        <h1>Surat</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item">Surat</li>
                <li class="breadcrumb-item active">Keterangan Tidak Mampu</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">

            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="card-title">Data Surat Keterangan Tidak Mampu</h5>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#tambah-surat-ktm">
                                Tambah Data
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="tambah-surat-ktm" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="tambah-surat-ktm-Label" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="tambah-surat-ktm-Label">Data Tidak Mampu</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="row" action="/surat-ktm" method="POST">
                                                @csrf
                                                <div class="row mb-3">
                                                    <label for="nomor" class="col-sm-3 col-form-label">Nomor Surat</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="nomor" name="nomor" value="000/KTM/VIII/2023" required>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="nama" class="form-control" id="nama" required>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="nik" class="col-sm-3 col-form-label">NIK</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="nik" class="form-control" id="nik" required>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="jenis_kelamin" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                                    <div class="col-sm-9">
                                                        <select id="jenis_kelamin" name="jenis_kelamin" class="form-select" required>
                                                            <option value="" selected>Pilih Jenis Kelamin ...</option>
                                                            <option value="Laki-laki">Laki-laki</option>
                                                            <option value="Perempuan">Perempuan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="tempat" class="col-sm-4 col-form-label">Tempat / Tanggal Lahir</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control" id="tempat" name="tempat" required>
                                                    </div>
                                                    <label for="tanggal_lahir" class="col-sm-1 col-form-label text-center">/</label>
                                                    <div class="col-sm-3">
                                                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="kewarganegaraan" class="col-sm-3 col-form-label">Kewarganegaraan</label>
                                                    <div class="col-sm-9">
                                                        <select id="kewarganegaraan" name="kewarganegaraan" class="form-select" required>
                                                            <option value="" selected>Pilih Kewarganegaraan ...</option>
                                                            <option value="Indonesia">Indonesia</option>
                                                            <option value="Asing">Asing</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="agama" class="col-sm-3 col-form-label">Agama</label>
                                                    <div class="col-sm-9">
                                                        <select id="agama" name="agama" class="form-select" required>
                                                            <option value="" selected>Pilih Agama ...</option>
                                                            <option value="Islam">Islam</option>
                                                            <option value="Kristen Protestan">Kristen Protestan</option>
                                                            <option value="Kristen Katolik">Kristen Katolik</option>
                                                            <option value="Hindu">Hindu</option>
                                                            <option value="Buddha">Buddha</option>
                                                            <option value="Konghucu">Konghucu</option>
                                                            <option value="Lainnya">Lainnya</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="status_perkawinan" class="col-sm-3 col-form-label">Status Perkawinan</label>
                                                    <div class="col-sm-9">
                                                        <select id="status_perkawinan" name="status_perkawinan" class="form-select" required>
                                                            <option value="" selected>Pilih Status Perkawinan ...</option>
                                                            <option value="Belum Menikah">Belum Menikah</option>
                                                            <option value="Sudah Menikah">Sudah Menikah</option>
                                                            <option value="Janda">Janda</option>
                                                            <option value="Duda">Duda</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="pekerjaan" class="col-sm-3 col-form-label">Pekerjaan</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="pekerjaan" class="form-control" id="pekerjaan" required>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="alamat" class="form-control" id="alamat" required>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="deskripsi" class="col-sm-3 col-form-label">Deskripsi</label>
                                                    <div class="col-sm-9">
                                                        <textarea type="text" name="deskripsi" class="form-control" id="deskripsi" rows="3" required>Bahwa bersangkutan tersebut adalah benar dari keluarga kurang mampu.</textarea>
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
                                @php
                                    $no = count($sktm);
                                @endphp
                                @foreach ($sktm->reverse() as $value)
                                    <tr>
                                        <th scope="row">{{ $no-- }}.</th>
                                        <td>{{ $value->nomor }}</td>
                                        <td>{{ $value->nama }}</td>
                                        <td>{{ $value->nik }}</td>
                                        <td class="text-center">
                                            <a class="btn btn-success" type="submit" target="blank" href="/surat-ktm/{{$value->id}}/view"><i class="fa-solid fa-print"></i></a>
                                            <!-- Button trigger modal -->
                                            <a class="btn btn-warning" type="submit" data-bs-toggle="modal" data-bs-target="#ModalEditSKTM-{{$value->id}}" href="/surat-ktm/{{$value->id}}/edit"><i class="fa-solid fa-pen-to-square"></i></a>
                                            <a class="btn btn-danger" type="submit" href="/surat-ktm/{{$value->id}}/delete"><i class="fa-regular fa-trash-can"></i></a>
                                        </td>
                                    </tr>

                                    <!-- Modal Edit SKTM -->
                                    <div class="modal fade" id="ModalEditSKTM-{{$value->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ModalEditSKTMLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                            <div class="modal-content">
                                                <form action="/surat-ktm/{{$value->id}}" method="POST" >
                                                    @csrf
                                                    @method('put')
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="ModalEditSKTMLabel">Edit Data SKTM {{$value->nomor}}</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row mb-3">
                                                            <label for="nomor" class="col-sm-3 col-form-label">Nomor Surat</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" id="nomor" name="nomor" value="{{$value->nomor}}" required>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" name="nama" class="form-control" id="nama" value="{{$value->nama}}" required>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="nik" class="col-sm-3 col-form-label">NIK</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" name="nik" class="form-control" id="nik" value="{{$value->nik}}" required>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="jenis_kelamin" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                                            <div class="col-sm-9">
                                                                <select id="jenis_kelamin" name="jenis_kelamin" class="form-select" required>
                                                                    <option value="" >Pilih Jenis Kelamin ...</option>
                                                                    <option value="Laki-laki" {{ ($value->jenis_kelamin == "Laki-laki") ? 'selected' : '' }}>Laki-laki</option>
                                                                    <option value="Perempuan" {{ ($value->jenis_kelamin == "Perempuan") ? 'selected' : '' }}>Perempuan</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="tempat" class="col-sm-4 col-form-label">Tempat / Tanggal Lahir</label>
                                                            <div class="col-sm-4">
                                                                <input type="text" class="form-control" id="tempat" name="tempat" value="{{$value->tempat}}" required>
                                                            </div>
                                                            <label for="tanggal_lahir" class="col-sm-1 col-form-label text-center">/</label>
                                                            <div class="col-sm-3">
                                                                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{$value->tanggal_lahir}}" required>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="kewarganegaraan" class="col-sm-3 col-form-label">Kewarganegaraan</label>
                                                            <div class="col-sm-9">
                                                                <select id="kewarganegaraan" name="kewarganegaraan" class="form-select" required>
                                                                    <option value="">Pilih Kewarganegaraan ...</option>
                                                                    <option value="Indonesia" {{ ($value->kewarganegaraan == "Indonesia") ? 'selected' : '' }}>Indonesia</option>
                                                                    <option value="Asing" {{ ($value->kewarganegaraan == "Asing") ? 'selected' : '' }}>Asing</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="agama" class="col-sm-3 col-form-label">Agama</label>
                                                            <div class="col-sm-9">
                                                                <select id="agama" name="agama" class="form-select" required>
                                                                    <option value="">Pilih Agama ...</option>
                                                                    <option value="Islam" {{ ($value->agama == "Islam") ? 'selected' : '' }}>Islam</option>
                                                                    <option value="Kristen Protestan" {{ ($value->agama == "Kristen Protestan") ? 'selected' : '' }}>Kristen Protestan</option>
                                                                    <option value="Kristen Katolik" {{ ($value->agama == "Kristen Katolik") ? 'selected' : '' }}>Kristen Katolik</option>
                                                                    <option value="Hindu" {{ ($value->agama == "Hindu") ? 'selected' : '' }}>Hindu</option>
                                                                    <option value="Buddha" {{ ($value->agama == "Buddha") ? 'selected' : '' }}>Buddha</option>
                                                                    <option value="Konghucu" {{ ($value->agama == "Konghucu") ? 'selected' : '' }}>Konghucu</option>
                                                                    <option value="Lainnya" {{ ($value->agama == "Lainnya") ? 'selected' : '' }}>Lainnya</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="status_perkawinan" class="col-sm-3 col-form-label">Status Perkawinan</label>
                                                            <div class="col-sm-9">
                                                                <select id="status_perkawinan" name="status_perkawinan" class="form-select" required>
                                                                    <option value="">Pilih Status Perkawinan ...</option>
                                                                    <option value="Belum Menikah" {{ ($value->status_perkawinan == "Belum Menikah") ? 'selected' : '' }}>Belum Menikah</option>
                                                                    <option value="Sudah Menikah" {{ ($value->status_perkawinan == "Sudah Menikah") ? 'selected' : '' }}>Sudah Menikah</option>
                                                                    <option value="Janda" {{ ($value->status_perkawinan == "Janda") ? 'selected' : '' }}>Janda</option>
                                                                    <option value="Duda" {{ ($value->status_perkawinan == "Duda") ? 'selected' : '' }}>Duda</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="pekerjaan" class="col-sm-3 col-form-label">Pekerjaan</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" name="pekerjaan" class="form-control" id="pekerjaan" value="{{$value->pekerjaan}}" required>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" name="alamat" class="form-control" id="alamat" value="{{$value->alamat}}" required>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <label for="deskripsi" class="col-sm-3 col-form-label">Deskripsi</label>
                                                            <div class="col-sm-9">
                                                                <textarea type="text" name="deskripsi" class="form-control" id="deskripsi" rows="3" required>{{$value->deskripsi}}</textarea>
                                                            </div>
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

                                @endforeach
                            </tbody>
                        </table>
                        <!-- End Table with hoverable rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
