@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tampilkan Data</div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="nama_kelas" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" value="{{ $data_kelas->nama_kelas }}" disabled>
                    </div>
                    <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
