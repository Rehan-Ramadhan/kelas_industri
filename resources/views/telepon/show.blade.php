@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Data</div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="nomor" class="form-label">Nomor</label>
                        <input type="text" class="form-control" id="nomor" name="nomor" value="{{ $telepon->nomor }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="id_pengguna" class="form-label">Nama Pengguna</label>
                        <input type="text" class="form-control" id="id_pengguna" name="id_pengguna" value="{{ $telepon->pengguna->name }}" disabled>
                    </div>
                    <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
