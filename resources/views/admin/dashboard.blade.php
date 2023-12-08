@extends('layouts.admin-layout')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2>Selamat Datang, Yovan</h2>
        </div>
    </div>
    <br>
    <div class="page-content">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="content d-flex m-4">
                        <div class="foto-profile">
                            <img src="{{ asset('admin/img/uwong.png') }}" alt="" width="120" height="120">
                        </div>
                        <div class="data-diri ms-4">
                            <h5>Daffa Yovanka</h5>
                            <br>
                            <h6>Nomor Induk : </h6>
                            <h6>Kelas : </h6>
                            <h6>Status : </h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card justify-content-center align-items-center">
                        <h3 class="text m-4 ">Mata Pelajaran Design Grafis</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
