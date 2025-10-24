@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detail Transaksi</div>
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label">Nama Pembeli</label>
                        <input type="text" class="form-control" 
                               value="{{ $transaksi->pembeli->nama_pembeli ?? '-' }}" 
                               readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama Barang</label>
                        <input type="text" class="form-control" 
                               value="{{ $transaksi->barang->nama_barang ?? '-' }}" 
                               readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tanggal Transaksi</label>
                        <input type="text" class="form-control" 
                               value="{{ $transaksi->tanggal_transaksi }}" 
                               readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jumlah</label>
                        <input type="text" class="form-control" 
                               value="{{ $transaksi->jumlah }}" 
                               readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Total Harga</label>
                        <input type="text" class="form-control" 
                               value="Rp {{ number_format($transaksi->total_harga, 0, ',', '.') }}" 
                               readonly>
                    </div>
                    <a href="{{ route('transaksi.index') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
