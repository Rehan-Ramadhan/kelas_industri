@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Pembeli</div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <a href="{{ route('pembeli.create') }}" class="btn btn-primary mb-2">Add</a>
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Pembeli</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Nomor Telepon</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no=1; @endphp
                            @foreach ($data_pembeli as $p)
                            <tr>
                                <th>{{ $no++ }}</th>
                                <td>{{ $p->nama_pembeli }}</td>
                                <td>{{ $p->jenis_kelamin }}</td>
                                <td>{{ $p->telepon }}</td>
                                <td>
                                    <a href="{{ route('pembeli.edit', $p->id) }}" class="btn btn-success">Edit</a>
                                    <a href="{{ route('pembeli.show', $p->id) }}" class="btn btn-warning">Show</a>
                                    <form action="{{ route('pembeli.destroy', $p->id) }}" method="post" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin?')">Delete</button>
                                    </form>
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
