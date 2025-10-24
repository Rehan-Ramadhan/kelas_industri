@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Murid</div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <a href="{{ route('murid.create') }}" class="btn btn-primary mb-2">Add</a>
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Tanggal Lahir</th>
                            <th scope="col">Tempat Lahir</th>
                            <th scope="col">Agama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Email</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no=1; @endphp
                            @foreach ($data_murid as $m)
                            <tr>
                                <th>{{ $no++ }}</th>
                                <td>{{ $m->kelas->nama_kelas }}</td>
                                <td>{{ $m->nama_lengkap }}</td>
                                <td>{{ $m->jenis_kelamin }}</td>
                                <td>{{ $m->tanggal_lahir }}</td>
                                <td>{{ $m->tempat_lahir }}</td>
                                <td>{{ $m->agama }}</td>
                                <td>{{ $m->alamat }}</td>
                                <td>{{ $m->email }}</td>
                                <td>
                                    <div class="d-flex flex-wrap gap-1">
                                        <a href="{{ route('murid.edit', $m->id) }}" class="btn btn-success">Edit</a>
                                        <a href="{{ route('murid.show', $m->id) }}" class="btn btn-warning">Show</a>
                                        <form action="{{ route('murid.destroy', $m->id) }}" method="post" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin?')">Delete</button>
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
