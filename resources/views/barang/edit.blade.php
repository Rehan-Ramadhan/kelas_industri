@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Barang</div>
                <div class="card-body">
                    <form action="{{ route('barang.update', $data_barang->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="nama_barang" class="form-label">Nama Barang</label>
                            <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="{{ $data_barang->nama_barang }}" required>
                            @error('nama_barang')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="merek" class="form-label">Nama Merek</label>
                            <input type="text" class="form-control" id="merek" name="merek" value="{{ $data_barang->merek }}" required>
                            @error('merek')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="harga" class="form-label">Harga</label>
                            <input type="number" class="form-control" id="harga" name="harga" value="{{ $data_barang->harga }}" required>
                            @error('harga')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="stok" class="form-label">Jumlah Stok</label>
                            <input type="number" class="form-control" id="stok" name="stok" value="{{ $data_barang->stok }}" required>
                            @error('stok')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a href="{{ route('barang.index') }}" class="btn btn-secondary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
