@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data</div>
                <div class="card-body">
                    <form action="{{ route('murid.update', $data_murid->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="id_kelas" class="form-label">Kelas</label>
                            <select class="form-control" name="id_kelas" id="id_kelas">
                                <option value="" disabled>Pilih Kelas</option>
                                @foreach ($data_kelas as $k)
                                    <option value="{{ $k->id }}" {{ $k->id == $data_murid->id_kelas ? 'selected' : '' }}>
                                        {{ $k->nama_kelas }}
                                    </option>
                                @endforeach
                            </select>
                            @error('id_kelas')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="nama_lengkap" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="{{ old('nama_lengkap', $data_murid->nama_lengkap) }}">
                            @error('nama_lengkap')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin_l" value="Laki-laki" {{ $data_murid->jenis_kelamin == 'Laki-laki' ? 'checked' : '' }}>
                                <label class="form-check-label" for="jenis_kelamin_l">Laki-laki</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin_p" value="Perempuan" {{ $data_murid->jenis_kelamin == 'Perempuan' ? 'checked' : '' }}>
                                <label class="form-check-label" for="jenis_kelamin_p">Perempuan</label>
                            </div>
                            @error('jenis_kelamin')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{ old('tanggal_lahir', $data_murid->tanggal_lahir) }}">
                            @error('tanggal_lahir')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="{{ old('tempat_lahir', $data_murid->tempat_lahir) }}">
                            @error('tempat_lahir')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="agama" class="form-label">Agama</label>
                            <select name="agama" id="agama" class="form-select">
                                <option value="" disabled>Pilih Agama</option>
                                <option value="Islam" {{ $data_murid->agama == 'Islam' ? 'selected' : '' }}>Islam</option>
                                <option value="Kristen" {{ $data_murid->agama == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                                <option value="Hindu" {{ $data_murid->agama == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                                <option value="Budha" {{ $data_murid->agama == 'Budha' ? 'selected' : '' }}>Budha</option>
                                <option value="Konghucu" {{ $data_murid->agama == 'Konghucu' ? 'selected' : '' }}>Konghucu</option>
                            </select>
                            @error('agama')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" value="{{ old('alamat', $data_murid->alamat) }}">
                            @error('alamat')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $data_murid->email) }}">
                            @error('email')
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
