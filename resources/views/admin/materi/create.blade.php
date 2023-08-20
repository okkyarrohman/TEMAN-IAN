@extends('layouts.admin-layout')
@section('content')
    {{-- Heading --}}
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Tambah Materi Pemrogaman Dasar Kelas X</h3>
                    <p class="text-subtitle text-muted">A pretty helpful component to show organized information to the user
                    </p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/admin-dashboard">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tambah Materi</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- // Basic multiple Column Form section start -->
        <section id="multiple-column-form">
            <div class="row match-height">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Tambah Materi</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form">
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="first-name-column">No Materi</label>
                                                <input type="text" id="first-name-column" class="form-control"
                                                    placeholder="First Name" name="fname-column">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="last-name-column">Nama Materi</label>
                                                <input type="text" id="last-name-column" class="form-control"
                                                    placeholder="Last Name" name="lname-column">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="city-column">Slug</label>
                                                <input type="text" id="city-column" class="form-control"
                                                    placeholder="City" name="city-column">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="country-floating">Tanggal Upload</label>
                                                <input type="text" id="country-floating" class="form-control"
                                                    name="country-floating" placeholder="Country">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="formFileMultiple" class="form-label">
                                                    Upload Materi
                                                </label>
                                                <input class="form-control" type="file" id="formFileMultiple" multiple>
                                            </div>
                                        </div>

                                        <section class="section">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4 class="card-title">Deskripsi Materi</h4>
                                                </div>
                                                <div class="card-body">
                                                    <div id="full">
                                                        <textarea name="#" id="" cols="30" rows="10"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- // Basic multiple Column Form section end -->
    @endsection
