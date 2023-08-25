@extends('layouts.admin-layout')
@section('content')
    {{-- Heading --}}
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Detail Materi Pemrogaman Dasar Kelas X</h3>
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
        {{-- End Heading --}}

        {{-- Start --}}
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Materi 1 : Perkenalan Java</h4>
                    <hr>
                </div>
                <div class="card-body">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur quas omnis laudantium tempore
                        exercitationem, expedita aspernatur sed officia asperiores unde tempora maxime odio reprehenderit
                        distinctio incidunt! Vel aspernatur dicta consequatur!.
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti, quaerat placeat nihil omnis
                        nulla.
                        quod? Magni, esse dolores in asperiores blanditiis adipisci, deserunt corporis id necessitatibus
                        incidunt dignissimos ullam labore nam beatae! Veniam ducimus nulla neque nisi! Odit debitis
                        reprehenderit doloribus! Perspiciatis quis hic fugit ipsam, fugiat accusamus molestias dolorem.
                    </p>
                    <br>
                    <div class="file-attachment">
                        <p>File Attachment</p>
                        <iframe width="560" height="315"
                            src="https://www.youtube.com/embed/mdBYIe9_fMo?si=pwB8o4AbyCPJeoIq" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                    <div class="author">
                        <span>Nama Guru : Julian Lambert</span>
                    </div>
                </div>
            </div>
        </section>
    @endsection
