@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data</div>

                <div class="card-body">
                    <form action="{{ route('kelas.update', $data_kelas->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="nama_kelas" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" value="{{ $data_kelas->nama_kelas }}" required>
                        </div>
                        @error('nama_kelas')
                                <small class="text-danger">{{ $message }}</small>
                        @enderror
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
