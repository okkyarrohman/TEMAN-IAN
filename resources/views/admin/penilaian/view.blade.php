@extends('layouts.admin-layout')
@section('content')
    {{-- Heading --}}
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Detail Penilaian Pemrogaman Dasar Kelas X</h3>
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
    </div>


    <!-- Striped rows start -->
    <section class="section">
        <div class="row" id="table-striped">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">List Penilaian Siswa Tugas 1</h4>
                    </div>
                    <div class="card-content">
                        <!-- table striped -->
                        <div class="table-responsive">
                            <table class="table table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>NO ABSEN</th>
                                        <th>NAMA SISWA</th>
                                        <th>FILE</th>
                                        <th>STATUS PENILAIAN</th>
                                        <th>NILAI</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-bold-500">01</td>
                                        <td>Yunanti Richa</td>
                                        <td>
                                            <a href="#" class="btn btn-info">
                                                <i class="bi bi-eye-fill"></i>
                                            </a>
                                        </td>
                                        <td class="text-bold-500">
                                            <span class="badge bg-danger">Belum Mengumpulkan</span>
                                        </td>
                                        <td>90</td>
                                        <td>
                                            <a href="#" class="btn btn-success">
                                                <i class="bi bi-pen"></i>
                                            </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-bold-500">01</td>
                                        <td>Yunanti Richa</td>
                                        <td>
                                            <a href="#" class="btn btn-info">
                                                <i class="bi bi-eye-fill"></i>
                                            </a>
                                        </td>
                                        <td class="text-bold-500">
                                            <span class="badge bg-warning">Belum Dinilai</span>
                                        </td>
                                        <td>90</td>
                                        <td>
                                            <a href="#" class="btn btn-success">
                                                <i class="bi bi-pen"></i>
                                            </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-bold-500">01</td>
                                        <td>Yunanti Richa</td>
                                        <td>
                                            <a href="#" class="btn btn-info">
                                                <i class="bi bi-eye-fill"></i>
                                            </a>
                                        </td>
                                        <td class="text-bold-500">
                                            <span class="badge bg-primary">Sedang Dinilai</span>
                                        </td>
                                        <td>90</td>
                                        <td>
                                            <a href="#" class="btn btn-success">
                                                <i class="bi bi-pen"></i>
                                            </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-bold-500">01</td>
                                        <td>Yunanti Richa</td>
                                        <td>
                                            <a href="#" class="btn btn-info">
                                                <i class="bi bi-eye-fill"></i>
                                            </a>
                                        </td>
                                        <td class="text-bold-500">
                                            <span class="badge bg-success">Telah Dinilai</span>
                                        </td>
                                        <td>90</td>
                                        <td>
                                            <a href="#" class="btn btn-success">
                                                <i class="bi bi-pen"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Striped rows end -->
@endsection
