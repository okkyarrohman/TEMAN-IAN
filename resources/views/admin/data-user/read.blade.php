@extends('layouts.admin-layout')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2>Data User</h2>
        </div>
    </div>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h5>Anda Sekarang Ada dikelompok 1</h5>
        </div>
    </div>
    <br>
    <div class="row justify-content-center align-items-center">
        <div class="col-md-10">
            <div class="card">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Date</th>
                            <th scope="col">Laporan</th>
                            <th scope="col">Aksi</th>
                            <th scope="col">Save?</th>
                        </tr>
                    </thead>
                    <tbody>
                        <form action="">
                            @csrf

                            <td>
                                <input type="date" name="" class="form-control">
                            </td>
                            <td>
                                <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                            </td>
                            <td>
                                <span class="badge badge-pill badge-primary">Diterima</span>
                            </td>
                            <td>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </td>
                        </form>
                    </tbody>
                </table>
                <br>
            </div>
        </div>
    </div>
    <br>
@endsection
