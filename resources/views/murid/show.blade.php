@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Data</div>
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label">Kelas</label>
                        <input type="text" class="form-control" name="kelas" disabled value="{{ $data_murid->kelas->nama_kelas }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama_lengkap" disabled value="{{ $data_murid->nama_lengkap }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jenis Kelamin</label>
                        <input type="text" class="form-control" disabled value="{{ $data_murid->jenis_kelamin }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" disabled value="{{ $data_murid->tanggal_lahir }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tempat Lahir</label>
                        <input type="text" class="form-control" disabled value="{{ $data_murid->tempat_lahir }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Agama</label>
                        <input type="text" class="form-control" disabled value="{{ $data_murid->agama }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Alamat</label>
                        <input type="text" class="form-control" disabled value="{{ $data_murid->alamat }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" disabled value="{{ $data_murid->email }}">
                    </div>
                    <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
