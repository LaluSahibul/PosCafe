@extends('admin.partials.main')
@section('title', 'Kategori Menu')
@section('content_admin')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card strpied-tabled-with-hover">
                        <div class="card-header ">
                            <h4 class="card-title">Daftar Kategori Menu</h4>
                            <button type="button" onclick="shortcutTambah()" class="btn btn-success btn-fill btn-wd ml-2"
                                data-toggle="modal" data-target="#modalTambah">Tambah Kategori Menu (F2)</button>
                        </div>
                        <div class="card-body table-full-width table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <th>ID</th>
                                    <th>Kategori Menu</th>
                                    <th>Aksi</th>
                                </thead>
                                <tbody>
                                    @foreach ($kategoris as $kategori)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $kategori->nama_kategori }}</td>
                                            <td>
                                                <button type="button" onclick="editKategori({{ $kategori->id }})"
                                                    class="btn btn-warning btn-fill ml-2" data-toggle="modal"
                                                    data-target="#modalEdit"><i class="fa fa-edit"></i>
                                                </button>
                                                <button type="button" onclick="hapusKategori({{ $kategori->id }})"
                                                    class="btn btn-danger btn-fill ml-2" data-toggle="modal"
                                                    data-target="#modalHapus"><i class="fa fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- Modal Tambah -->
                            <div class="modal fade modal-mini modal-primary" id="modalTambah" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Tambah Kategori Menu</h5>
                                            <a data-dismiss="modal" class="close-modal"><i
                                                    class="nc-icon nc-simple-remove"></i></a>
                                        </div>
                                        <form action="/kategori" method="post">
                                            @csrf
                                            <div class="modal-header justify-content-center">
                                                <div class="col-lg-12">
                                                    <label for="nama_kategori">Nama Kategori Menu</label>
                                                    <input class="form-control input-modal" id="nama_kategori"
                                                        name="nama_kategori" type="text"
                                                        placeholder="Nama Kategori Menu...">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-success btn-fill">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--  End Modal -->

                            <!-- Modal Edit -->
                            <div class="modal fade modal-mini modal-primary" id="modalEdit" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Edit Kategori Menu</h5>
                                            <a data-dismiss="modal" class="close-modal"><i
                                                    class="nc-icon nc-simple-remove"></i></a>
                                        </div>
                                        <form action="/edit_kategori" method="post">
                                            @csrf
                                            @method('post')
                                            <div class="modal-header justify-content-center">
                                                <input class="form-control" id="id_kategori" name="id_kategori"
                                                    type="hidden">
                                                <div class="col-lg-12">
                                                    <label for="edit_nama_kategori">Nama Kategori Menu</label>
                                                    <input class="form-control input-modal" id="edit_nama_kategori"
                                                        name="edit_nama_kategori" type="text"
                                                        placeholder="Nama Kategori Menu...">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-success btn-fill">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--  End Modal -->

                            <!-- Modal Hapus -->
                            <div class="modal fade modal-primary" id="modalHapus" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title fs-5" id="deleteModalLabel">Delete</h4>
                                            <a data-dismiss="modal" class="close-modal"><i
                                                    class="nc-icon nc-simple-remove"></i></a>
                                        </div>
                                        <div class="modal-body">
                                            <span class="text-center d-flex text-danger">
                                                <svg class="ms-auto" xmlns="http://www.w3.org/2000/svg" width="32"
                                                    height="32" viewBox="0 0 24 24">
                                                    <g fill="currentColor">
                                                        <path
                                                            d="M12 7.25a.75.75 0 0 1 .75.75v5a.75.75 0 0 1-1.5 0V8a.75.75 0 0 1 .75-.75ZM12 17a1 1 0 1 0 0-2a1 1 0 0 0 0 2Z" />
                                                        <path fill-rule="evenodd"
                                                            d="M8.294 4.476C9.366 3.115 10.502 2.25 12 2.25c1.498 0 2.634.865 3.706 2.226c1.054 1.34 2.17 3.32 3.6 5.855l.436.772c1.181 2.095 2.115 3.75 2.605 5.077c.5 1.358.62 2.59-.138 3.677c-.735 1.055-1.962 1.486-3.51 1.69c-1.541.203-3.615.203-6.274.203h-.85c-2.66 0-4.733 0-6.274-.203c-1.548-.204-2.775-.635-3.51-1.69c-.758-1.087-.639-2.32-.138-3.677c.49-1.328 1.424-2.982 2.605-5.077l.436-.772c1.429-2.535 2.546-4.516 3.6-5.855Zm1.179.928C8.499 6.641 7.437 8.52 5.965 11.13l-.364.645c-1.226 2.174-2.097 3.724-2.54 4.925c-.438 1.186-.378 1.814-.04 2.3c.361.516 1.038.87 2.476 1.06c1.432.188 3.406.19 6.14.19h.727c2.733 0 4.707-.002 6.14-.19c1.437-.19 2.114-.544 2.474-1.06c.339-.486.4-1.114-.038-2.3c-.444-1.201-1.315-2.751-2.541-4.925l-.364-.645c-1.472-2.61-2.534-4.489-3.508-5.726C13.562 4.18 12.813 3.75 12 3.75c-.813 0-1.562.429-2.527 1.654Z"
                                                            clip-rule="evenodd" />
                                                    </g>
                                                </svg>

                                                Hapus Kategori?
                                                <svg class="me-auto" xmlns="http://www.w3.org/2000/svg" width="32"
                                                    height="32" viewBox="0 0 24 24">
                                                    <g fill="currentColor">
                                                        <path
                                                            d="M12 7.25a.75.75 0 0 1 .75.75v5a.75.75 0 0 1-1.5 0V8a.75.75 0 0 1 .75-.75ZM12 17a1 1 0 1 0 0-2a1 1 0 0 0 0 2Z" />
                                                        <path fill-rule="evenodd"
                                                            d="M8.294 4.476C9.366 3.115 10.502 2.25 12 2.25c1.498 0 2.634.865 3.706 2.226c1.054 1.34 2.17 3.32 3.6 5.855l.436.772c1.181 2.095 2.115 3.75 2.605 5.077c.5 1.358.62 2.59-.138 3.677c-.735 1.055-1.962 1.486-3.51 1.69c-1.541.203-3.615.203-6.274.203h-.85c-2.66 0-4.733 0-6.274-.203c-1.548-.204-2.775-.635-3.51-1.69c-.758-1.087-.639-2.32-.138-3.677c.49-1.328 1.424-2.982 2.605-5.077l.436-.772c1.429-2.535 2.546-4.516 3.6-5.855Zm1.179.928C8.499 6.641 7.437 8.52 5.965 11.13l-.364.645c-1.226 2.174-2.097 3.724-2.54 4.925c-.438 1.186-.378 1.814-.04 2.3c.361.516 1.038.87 2.476 1.06c1.432.188 3.406.19 6.14.19h.727c2.733 0 4.707-.002 6.14-.19c1.437-.19 2.114-.544 2.474-1.06c.339-.486.4-1.114-.038-2.3c-.444-1.201-1.315-2.751-2.541-4.925l-.364-.645c-1.472-2.61-2.534-4.489-3.508-5.726C13.562 4.18 12.813 3.75 12 3.75c-.813 0-1.562.429-2.527 1.654Z"
                                                            clip-rule="evenodd" />
                                                    </g>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                Cancel
                                            </button>
                                            <form action="/hapus_kategori" method="post">
                                                @csrf
                                                @method('post')
                                                <input class="form-control" id="id_kategori_hapus"
                                                    name="id_kategori_hapus" type="hidden">
                                                <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                        viewBox="0 0 24 24">
                                                        <path fill="currentColor"
                                                            d="M6 19a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V7H6v12M8 9h8v10H8V9m7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5Z" />
                                                    </svg>Delete
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--  End Modal -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
