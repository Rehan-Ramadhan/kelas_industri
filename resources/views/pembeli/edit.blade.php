@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Pembeli</div>

                <div class="card-body">
                    <form action="{{ route('pembeli.update', $data_pembeli->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="nama_pembeli" class="form-label">Nama Pembeli</label>
                            <input type="text" class="form-control" id="nama_pembeli" name="nama_pembeli" value="{{ $data_pembeli->nama_pembeli }}" required>
                            @error('nama_pembeli')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-laki" {{ $data_pembeli->jenis_kelamin == 'Laki-laki' ? 'checked' : '' }}>
                                <label class="form-check-label">Laki-laki</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan" {{ $data_pembeli->jenis_kelamin == 'Perempuan' ? 'checked' : '' }}>
                                <label class="form-check-label">Perempuan</label>
                            </div>
                            @error('jenis_kelamin')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="telepon" class="form-label">Nomor Telepon</label>
                            <input type="text" class="form-control" id="telepon" name="telepon" value="{{ $data_pembeli->telepon }}" required>
                            @error('telepon')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a href="{{ route('pembeli.index') }}" class="btn btn-secondary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
