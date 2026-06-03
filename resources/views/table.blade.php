@extends('layouts.template')

@section('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.8/css/dataTables.dataTables.css">
    <style>
        body{
            font-family: Arial, sans-serif;
        }

    </style>
@endsection

@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header bg-dark text-white">
                <h3>Tabel Data Point</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped" id="tabledatapoints">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Deskripsi</th>
                            <th>Foto</th>
                            <th>Tanggal Dibuat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $no = 1;
                        @endphp
                        @foreach ( $points as $p)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $p ['name'] }}</td>
                                <td>{{ $p['description'] }}</td>
                                <td>
                                    <img src="{{ asset('storage/images/') . '/'. $p['image'] }}" alt="" width="200">
                                </td>
                                <td>{{ $p['created_at'] }}</td>
                            </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-header bg-dark text-white">
                <h3>Tabel Data Polyline</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped" id="tabledatapolyline">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Deskripsi</th>
                            <th>Foto</th>
                            <th>Tanggal Dibuat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $no = 1;
                        @endphp
                        @foreach ( $polylines as $p)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $p ['name'] }}</td>
                                <td>{{ $p['description'] }}</td>
                                <td>
                                    <img src="{{ asset('storage/images/') . '/'. $p['image'] }}" alt="" width="200">
                                </td>
                                <td>{{ $p['created_at'] }}</td>
                            </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-header bg-dark text-white">
                <h3>Tabel Data Polygon</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped" id="tabledatapolygon">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Deskripsi</th>
                            <th>Foto</th>
                            <th>Tanggal Dibuat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $no = 1;
                        @endphp
                        @foreach ( $polygons as $p)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $p ['name'] }}</td>
                                <td>{{ $p['description'] }}</td>
                                <td>
                                    <img src="{{ asset('storage/images/') . '/'. $p['image'] }}" alt="" width="200">
                                </td>
                                <td>{{ $p['created_at'] }}</td>
                            </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.3.8/js/dataTables.js"></script>
    <script>
        new DataTable('#tabledatapoints');
        new DataTable('#tabledatapolyline');
        new DataTable('#tabledatapolygon');
    </script>
@endsection


