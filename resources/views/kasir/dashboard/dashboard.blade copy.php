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
                    <div class="row" id="daftarMenu">
                        {{-- START HERE --}}
                        @foreach ($menus as $menu)
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="card-body">
                                                <img src="/assets/img/default-avatar.png" width="150" height="150"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-8 mt-3">
                                            <div class="card-body">
                                                <span id="namaMenu">
                                                    <p>Nama Menu : {{ $menu->nama_menu }}</p>
                                                    <p>Kategori : {{ $menu->kategori->nama_kategori }}</p>
                                                    <p>Harga : {{ 'Rp ' . number_format($menu->harga, 0, ',', '.') }}</p>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- END HERE --}}
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
