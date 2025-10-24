@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data</div>

                <div class="card-body">
                    <form action="{{ route('kelas.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="nama_kelas" class="form-label">Kelas</label>
                            <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" placeholder="masukkan kelas">
                            @error('nama_kelas')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a href="{{ route('kelas.index') }}" class="btn btn-secondary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
