@extends('layouts.admin-layout')
@section('content')
    {{-- Heading --}}
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>List Materi Pemrogaman Dasar Kelas X</h3>
                    <p class="text-subtitle text-muted">A pretty helpful component to show organized information to the user
                    </p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/admin-dashboard">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Lihat Materi</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <!-- list groups simple & disabled start -->
        <section id="basic-list-group">
            <div class="row match-height">
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Materi 1 : Perkenalan Java</h4>

                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                <b>slug</b> Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, fugiat? Error
                                unde
                                cumque explicabo ratione enim soluta voluptates, ab vitae.
                            </p>
                            <p>
                                Tanggal upload materi : 20-01-2023
                            </p>
                            <p>
                                <a href="#" class="btn btn-primary" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="collapseExample">
                                    <i class="bi bi-book"></i>
                                </a>
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

                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Materi 2 : Perkenalan C++</h4>
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                <b>slug</b> Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, fugiat? Error
                                unde
                                cumque explicabo ratione enim soluta voluptates, ab vitae.
                            </p>
                            <p>
                                Tanggal upload materi : 20-01-2023
                            </p>
                            <p>
                                <a href="#" class="btn btn-primary" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="collapseExample">
                                    <i class="bi bi-book"></i>
                                </a>
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

                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Materi 3 : Perkenalan HTML</h4>
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                <b>slug</b> Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, fugiat? Error
                                unde
                                cumque explicabo ratione enim soluta voluptates, ab vitae.
                            </p>
                            <p>
                                Tanggal upload materi : 20-01-2023
                            </p>
                            <p>
                                <a href="#" class="btn btn-primary" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="collapseExample">
                                    <i class="bi bi-book"></i>
                                </a>
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

                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Materi 4 : Perkenalan CSS</h4>
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                <b>slug</b> Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, fugiat? Error
                                unde
                                cumque explicabo ratione enim soluta voluptates, ab vitae.
                            </p>
                            <p>
                                Tanggal upload materi : 20-01-2023
                            </p>
                            <p>
                                <a href="#" class="btn btn-primary" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="collapseExample">
                                    <i class="bi bi-book"></i>
                                </a>
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

            </div>
        </section>
    @endsection
