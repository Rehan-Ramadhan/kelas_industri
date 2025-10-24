@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Transaksi</div>
                <div class="card-body">
                    <form action="{{ route('transaksi.update', $data_transaksi->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="id_pembeli" class="form-label">Pembeli</label>
                            <select class="form-control" name="id_pembeli" required>
                                <option value="" disabled>Pilih Pembeli</option>
                                @foreach ($data_pembeli as $p)
                                    <option value="{{ $p->id }}" {{ $data_transaksi->id_pembeli == $p->id ? 'selected' : '' }}>
                                        {{ $p->nama_pembeli }}
                                    </option>
                                @endforeach
                            </select>
                            @error('id_pembeli')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="id_barang" class="form-label">Barang</label>
                            <select class="form-control" name="id_barang" required>
                                <option value="" disabled>Pilih Barang</option>
                                @foreach ($data_barang as $b)
                                    <option value="{{ $b->id }}" {{ $data_transaksi->id_barang == $b->id ? 'selected' : '' }}>
                                        {{ $b->nama_barang }}
                                    </option>
                                @endforeach
                            </select>
                            @error('id_barang')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="tanggal_transaksi" class="form-label">Tanggal Transaksi</label>
                            <input type="date" class="form-control" id="tanggal_transaksi" name="tanggal_transaksi" value="{{ old('tanggal_transaksi', $data_transaksi->tanggal_transaksi) }}">
                            @error('tanggal_transaksi')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="jumlah" class="form-label">Jumlah</label>
                            <input type="number" class="form-control" id="jumlah" name="jumlah" value="{{ old('jumlah', $data_transaksi->jumlah) }}">
                            @error('jumlah')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="total_harga" class="form-label">Total Harga</label>
                            <input type="number" class="form-control" id="total_harga" name="total_harga" value="{{ old('total_harga', $data_transaksi->total_harga) }}">
                            @error('total_harga')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        <a href="{{ route('transaksi.index') }}" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
