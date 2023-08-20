@extends('layouts.admin-layout')

@section('content')
    {{-- Heading --}}
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Data Murid</h3>
                    <p class="text-subtitle text-muted">A pretty helpful component to show organized information to the user
                    </p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/admin-dashboard">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data Murid</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        {{-- Content --}}
        <section class="section">
            <div class="card">
                <div class="card-header">
                    Simple Datatable
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>No Absen</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>NISN</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Graiden</td>
                                <td>vehicula.aliquet@semconsequat.co.uk</td>
                                <td>076 4820 8838</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                                <td>
                                    <a href="#">
                                        <i class="bi bi-check-circle-fill"></i>
                                    </a>
                                    <a href="#">
                                        <i class="bi bi-exclamation-circle-fill"></i>
                                    </a>
                                    <a href="#">
                                        <i class="bi bi-info-circle-fill"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Nathaniel</td>
                                <td>mi.Duis@diam.edu</td>
                                <td>(012165) 76278</td>
                                <td>
                                    <span class="badge bg-danger">Inactive</span>
                                </td>
                                <td>
                                    <a href="#">
                                        <i class="bi bi-check-circle-fill"></i>
                                    </a>
                                    <a href="#">
                                        <i class="bi bi-exclamation-circle-fill"></i>
                                    </a>
                                    <a href="#">
                                        <i class="bi bi-info-circle-fill"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    @endsection
