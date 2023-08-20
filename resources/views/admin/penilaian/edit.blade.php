@extends('layouts.admin-layout')
@section('content')
    {{-- Heading --}}
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Edit Penilaian Tugas Pemrogaman Dasar Kelas X</h3>
                    <p class="text-subtitle text-muted">A pretty helpful component to show organized information to the user
                    </p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/admin-dashboard">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Penilaian Tugas</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    {{-- Form EDIT --}}
    <form action="">
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Penilaian (Nama siswa) Tugas 1 :</h4>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="basicInput">No Absen</label>
                                <input type="text" class="form-control" id="basicInput" placeholder="01" disabled>
                            </div>

                            <div class="form-group">
                                <label for="basicInput">Nama</label>
                                <input type="text" class="form-control" id="basicInput" placeholder="Richa" disabled>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="basicInput">Nilai</label>
                                <input type="number" class="form-control" id="basicInput" placeholder="Masukkan Nilai">
                            </div>
                            <br>
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="inputGroupSelect01">Status Penilaian</label>
                                <select class="form-select" id="inputGroupSelect01">
                                    <option selected>Pilih...</option>
                                    <option value="1">Belum Mengumpulkan</option>
                                    <option value="2">Belum Dinilai</option>
                                    <option value="3">Sedang Dinilai</option>
                                    <option value="4">Telah Dinilai</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">File</label>
                                <iframe src="www.google.com" frameborder="0" style="width:100%; height:400px;"></iframe>
                            </div>
                        </div>
                        <div class="form-group justify-content-center">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>
@endsection
