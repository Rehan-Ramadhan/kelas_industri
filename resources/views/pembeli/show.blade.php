@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tampilkan Data Pembeli</div>
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label">Nama Pembeli</label>
                        <input type="text" class="form-control" value="{{ $data_pembeli->nama_pembeli }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jenis Kelamin</label>
                        <input type="text" class="form-control" value="{{ $data_pembeli->jenis_kelamin }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nomor Telepon</label>
                        <input type="text" class="form-control" value="{{ $data_pembeli->telepon }}" disabled>
                    </div>
                    <a href="{{ route('pembeli.index') }}" class="btn btn-secondary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
