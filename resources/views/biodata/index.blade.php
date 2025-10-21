@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Biodata</div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <a href="{{ route('biodata.create') }}" class="btn btn-primary mb-2">Add</a>
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Lengkap</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Tempat Lahir</th>
                            <th scope="col">Tanggal Lahir</th>
                            <th scope="col">Agama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Telepon</th>
                            <th scope="col">Email</th>
                            <th scope="col">Foto Profil</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no=1; @endphp
                            @foreach ($biodatas as $b)
                            <tr>
                                <th>{{ $no++ }}</th>
                                <td>{{ $b->nama_lengkap }}</td>
                                <td>{{ $b->jenis_kelamin }}</td>
                                <td>{{ $b->tempat_lahir }}</td>
                                <td>{{ $b->tanggal_lahir }}</td>
                                <td>{{ $b->agama }}</td>
                                <td>{{ $b->alamat }}</td>
                                <td>{{ $b->telepon }}</td>
                                <td>{{ $b->email }}</td>
                                <td><img src="{{ asset('images/biodata/' . $b->foto_profil) }}" alt="Foto Profil" width="100"></td>
                                <td>
                                    <div class="d-flex flex-wrap gap-1">
                                        <a href="{{ route('biodata.edit', $b->id) }}" class="btn btn-success btn-sm flex-fill text-center">Edit</a>
                                        <a href="{{ route('biodata.show', $b->id) }}" class="btn btn-warning btn-sm flex-fill text-center">Show</a>
                                        <form action="{{ route('biodata.destroy', $b->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin?')" class="flex-fill">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm w-100">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
