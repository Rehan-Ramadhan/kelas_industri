@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tampilkan Data Barang</div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="nama_barang" class="form-label">Nama Barang</label>
                        <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="{{ $data_barang->nama_barang }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="merek" class="form-label">Nama Merek</label>
                        <input type="text" class="form-control" id="merek" name="merek" value="{{ $data_barang->merek }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="number" class="form-control" id="harga" name="harga" value="{{ $data_barang->harga }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="stok" class="form-label">Jumlah Stok</label>
                        <input type="number" class="form-control" id="stok" name="stok" value="{{ $data_barang->stok }}" disabled>
                    </div>
                    <a href="{{ route('barang.index') }}" class="btn btn-secondary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
