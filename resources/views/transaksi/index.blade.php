@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Transaksi</div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <a href="{{ route('transaksi.create') }}" class="btn btn-primary mb-2">Add</a>
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Pembeli</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Total Harga</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no=1; @endphp
                            @foreach ($data_transaksi as $t)
                            <tr>
                                <th>{{ $no++ }}</th>
                                <td>{{ $t->pembeli->nama_pembeli }}</td>
                                <td>{{ $t->barang->nama_barang }}</td>
                                <td>{{ $t->tanggal_transaksi }}</td>
                                <td>{{ $t->jumlah }}</td>
                                <td>{{ $t->total_harga }}</td>
                                <td>
                                    <div class="d-flex flex-wrap gap-1">
                                        <a href="{{ route('transaksi.edit', $t->id) }}" class="btn btn-success">Edit</a>
                                        <a href="{{ route('transaksi.show', $t->id) }}" class="btn btn-warning">Tampilkan</a>
                                        <form action="{{ route('transaksi.destroy', $t->id) }}" method="post" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin?')">Hapus</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
