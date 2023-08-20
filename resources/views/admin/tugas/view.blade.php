@extends('layouts.admin-layout')
@section('content')
    {{-- Heading --}}
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Detail Tugas Pemrogaman Dasar Kelas X</h3>
                    <p class="text-subtitle text-muted">A pretty helpful component to show organized information to the user
                    </p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/admin-dashboard">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Detail Materi</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <section id="basic-list-group">
            <div class="row match-height">
                <div class="col-lg-4 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Tugas 1 : Program Java</h4>
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur quas omnis laudantium
                                tempore
                                exercitationem, expedita aspernatur sed officia asperiores unde tempora maxime odio
                                reprehenderit
                                distinctio incidunt! Vel aspernatur dicta consequatur!
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti, quaerat placeat nihil
                                omnis
                                nulla
                            <p>
                                <a href="#" class="btn btn-danger" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="collapseExample">
                                    <i class="bi bi-download"></i>
                                </a>
                                <a href="#" class="btn btn-success" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="collapseExample">
                                    <i class="bi bi-pen"></i>
                                </a>
                                <a href="#" class="btn btn-danger">
                                    <i class="bi bi-slash-circle"></i>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Form Pengumpulan Tugas</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="basicInput">No Absen</label>
                                <input type="text" class="form-control" id="basicInput" placeholder="No Absen" disabled>
                            </div>
                            <div class="form-group">
                                <label for="basicInput">Nama</label>
                                <input type="text" class="form-control" id="basicInput" placeholder="Nama" disabled>
                            </div>
                            <div class="form-group">
                                <label for="basicInput">Deskripsi</label>
                                <textarea type="text" class="form-control" id="basicInput" placeholder="Deskripsi"></textarea>
                            </div>
                            <form action="">
                                <div class="form">
                                    <div class="card">
                                        <div class="card-content">
                                            <ul> Format File Harus Berformat dari salah satu file Berikut
                                                <li>PDF</li>
                                                <li>PPT</li>
                                                <li>JPG</li>
                                                <li>PNG</li>
                                            </ul>
                                            <!-- File uploader with multiple files upload -->
                                            <input type="file" class="multiple-files-filepond" multiple>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit Tugas</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
