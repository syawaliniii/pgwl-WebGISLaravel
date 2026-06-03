@extends('layouts.template')

@section('')
    <style>
        body {
            font-family: Arial, sans-serif;
        }
    </style>
@endsection

@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h3>Aplikasi Geospasial CRUD</h3>
            </div>
            <div class="card-body">
                <P> Aplikasi ini dibuat untuk memenuhi tugas mata kuliah Pratikum Pemrograman Web Lanjut.
                Aplikasi ini menampilkan peta interaktif yang menunjukkan objek dengan geometri titik,
                garis, dan area yang ditambah, ditampilkan, dan diubah, dan dihapus. Aplikasi ini dikembangkan
                dengan menggunakan Laravel dan PostgreSQL - PostGIS.</P>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-3">
                <div class="card border-primary mb-3">
                    <div class="card-header">
                        <h5>Jumlah Point</h5>
                    </div>
                    <div class="card-body text-center">
                        <h1>{{ $points_count }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card border-success mb-3">
                    <div class="card-header">
                        <h5>Jumlah Polyline</h5>
                    </div>
                    <div class="card-body text-center">
                        <h1>{{ $polylines_count }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card border-danger mb-3">
                    <div class="card-header">
                        <h5>Jumlah Polygon</h5>
                    </div>
                    <div class="card-body text-center">
                        <h1>{{ $polygons_count }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card border-info mb-3">
                    <div class="card-header">
                        <h5>Jumlah User</h5>
                    </div>
                    <div class="card-body text-center">
                        <h1>{{ $users_count }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


