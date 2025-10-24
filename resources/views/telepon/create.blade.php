@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Data</div>

                <div class="card-body">
                    <form action="{{ route('telepon.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="nomor" class="form-label">Nomor</label>
                            <input type="text" class="form-control" id="nomor" name="nomor" placeholder="masukkan nomor" >
                            @error('nomor')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="id_pengguna" class="form-label">Nama Pengguna</label>
                            <select class="form-control" name="id_pengguna">
                                <option value="" disabled selected>Pilih Pengguna</option>
                                @foreach ($data_pengguna as $t)
                                    <option value="{{ $t->id }}">{{ $t->name }}</option>
                                @endforeach
                            </select>
                            @error('id_pengguna')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
