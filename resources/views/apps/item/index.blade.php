@extends('layouts.app')
@section('content')
    <section class="d-flex justify-content-center">
        <div class="row container w-100">
            <div class="row mb-0 mt-4 head-title">
                <div class="col-lg-9 col-xl-10">
                    <h3 class="mb-3">{{ $titlePage }}</h3>
                </div>
                <div class="col-lg-3 col-xl-2">
                    <div class="d-grid gap-4">
                        <a href="{{ route('item.create') }}" class="btn btn-tambah">Tambah Barang</a>
                    </div>
                </div>
            </div>
            <hr>
            <div class="card rounded width-card margin-card">
                @if (session()->has('notif'))
                    <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
                        <i class="bi bi-check-lg"></i> {{ session()->get('notif') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="card-body">
                    <table class="table table-hover table-responsive" id="table-items">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Kode Barang</th>
                                <th scope="col">Nama Barang</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Stok</th>
                                <th scope="col">Satuan</th>
                                <th scope="col" width="250px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $key => $item)
                                <tr>
                                    <th scope="row">{{ $key+1 }}</th>
                                    <td>{{ $item->code }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ "Rp. ". number_format($item->price, 0, ".", ",") }}</td>
                                    <td>{{ $item->stock }}</td>
                                    <td>{{ $item->unit->name }}</td>
                                    <td>
                                        <a href="{{ route('item.edit', $item->id) }}" type="button" class="btn btn-md btn-primary" title="Edit"><i class="bi bi-pencil-square"></i></a>
                                        <button type="button" class="btn btn-md btn-success" title="Detail" data-bs-toggle="modal" data-bs-target="#detailModal{{ $loop->iteration }}"><i class="bi bi-info-square icon-white"></i></button>
                                        <button type="button" class="btn btn-danger btn-md" title="Hapus" data-bs-toggle="modal" data-bs-target="#destroyModal{{ $loop->iteration }}"><i class="bi bi-trash-fill"></i></button>

                                        <!-- Modal Detail -->
                                        <div class="modal fade" id="detailModal{{ $loop->iteration }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable modal-xl">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Data Barang</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <label for="code-item" class="form-label">Kode Barang</label>
                                                                    <input type="text" class="form-control" id="code-item" value="{{ $item->code }}" disabled>
                                                                </div>
                                                                <div class="col-6">
                                                                    <label for="name-item" class="form-label">Nama Barang</label>
                                                                    <input type="text" class="form-control" id="name-item" value="{{ $item->name }}" disabled>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-3">
                                                                <div class="col-6">
                                                                    <label for="desc-item" class="form-label">Deskripsi Barang</label>
                                                                    <textarea class="form-control" id="desc-item" style="height: 150px" disabled>{{ $item->desc }}</textarea>
                                                                </div>
                                                                <div class="col-6">
                                                                    <label for="price-item" class="form-label">Harga</label>
                                                                    <input type="text" class="form-control" id="price-item" value="{{ "Rp. ". number_format($item->price, 0, ".", ",") }}" disabled>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-3">
                                                                <div class="col-6">
                                                                    <label for="stock-item" class="form-label">Stok Barang</label>
                                                                    <input type="text" class="form-control" id="stock-item" value="{{ $item->stock }}" disabled>
                                                                </div>
                                                                <div class="col-6">
                                                                    <label for="unit-item" class="form-label">Satuan</label>
                                                                    <input type="text" class="form-control" id="unit-item" value="{{ $item->unit->name }}" disabled>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Modal Destory -->
                                        <div class="modal fade" id="destroyModal{{ $loop->iteration }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Data</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Apakah anda yakin ingin menghapus data barang {{ $item->name }} ?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <form action="{{ route('item.destroy', $item->id) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
@endpush
@push('js-libraries')
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
@endpush
@push('js')
    <script>
        $(document).ready( function () {
            $('#table-items').DataTable();
        });
    </script>
@endpush
