@extends('kasir.partials.main')
@section('title', 'Dashboard')
@section('content_kasir')
    <div class="content mt-1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card ">
                        <div class="card-body">
                            <ul class="nav">
                                <li class="nav-item">
                                    <p>Nama Kasir : {{ Auth::user()->nama_lengkap }}</p>
                                </li>
                            </ul>
                            <ul class="nav">
                                <li class="nav-item">
                                    <p>Penjualan : HAHA</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card ">
                        <div class="card-body ">
                            <form action="">
                                <div class="d-flex">
                                    <input type="text" class="form-control" id="searchInput" placeholder="Search...">
                                    {{-- <button class="btn btn-secondary btn-fill">Search</button> --}}
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card ">
                        <div class="row">
                            <div class="col-md-8">
                                {{-- START HERE --}}
                                <div class="card-body table-responsive">
                                    <table class="table table-hover table-striped" style="display: none" id="daftar_menu">
                                        <thead>
                                            <th>ID</th>
                                            <th>Nama Menu</th>
                                            <th>Kategori Menu</th>
                                            <th>Harga</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($menus as $menu)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $menu->nama_menu }}</td>
                                                    <td>{{ $menu->kategori->nama_kategori }}</td>
                                                    <td>{{ 'Rp ' . number_format($menu->harga, 0, ',', '.') }}</td>
                                                    @if ($menu->status === 'tersedia')
                                                        <td style="color: blue; text-transform:capitalize;">
                                                            {{ $menu->status }}
                                                        </td>
                                                    @else
                                                        <td style="color:crimson; text-transform:capitalize;">
                                                            {{ $menu->status }}</td>
                                                    @endif
                                                    <td>
                                                        <button type="button" class="btn btn-warning btn-fill ml-2"
                                                            data-toggle="modal" data-target="#modalEdit">Pesan
                                                        </button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <!-- disini kodenya ntar -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
