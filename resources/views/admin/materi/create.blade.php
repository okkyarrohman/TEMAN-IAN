@extends('layouts.admin-layout')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2>Input Materi</h2>
        </div>
    </div>
    <br>
    <div class="row justify-content-center align-items-center">
        <div class="col-md-10">
            <div class="card p-4">
                <form action="">
                    @csrf
                    <div class="field-1">
                        <h6 for="" class="text text-center">Judul Materi</h6>
                        <input type="text" class="form-control rounded" placeholder="Masukkan Judul Materi">
                        <br>
                    </div>
                    <div class="field-1">
                        <h6 for="" class="text text-center">Link Materi</h6>
                        <input type="text" class="form-control rounded" placeholder="Masukkan Link Materi">
                        <br>
                    </div>
                    <div class="field-1">
                        <h6 for="" class="text text-center">Pesan</h6>
                        <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                        <br>
                    </div>
                    <div class="row justify-content-center align-items-center p-2">
                        <button type="submit" class="btn btn-primary ">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <br>
@endsection
