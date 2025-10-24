@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Barang</div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <a href="{{ route('barang.create') }}" class="btn btn-primary mb-2">Add</a>
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Merek</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Stok</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no=1; @endphp
                            @foreach ($data_barang as $b)
                            <tr>
                                <th>{{ $no++ }}</th>
                                <td>{{ $b->nama_barang }}</td>
                                <td>{{ $b->merek }}</td>
                                <td>{{ $b->harga }}</td>
                                <td>{{ $b->stok }}</td>
                                <td>
                                    <a href="{{ route('barang.edit', $b->id) }}" class="btn btn-success">Edit</a>
                                    <a href="{{ route('barang.show', $b->id) }}" class="btn btn-warning">Show</a>
                                    <form action="{{ route('barang.destroy', $b->id) }}" method="post" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin?')">Delete</button>
                                    </form>
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
