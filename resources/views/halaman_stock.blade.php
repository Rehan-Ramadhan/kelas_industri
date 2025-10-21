<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h1>Daftar Produk</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if($products->count())
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>Rp{{ number_format($product->price, 0, ',', '.') }}</td>
                    <td>{{ $product->stock }}</td>
                    <td>
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Belum ada produk.</p>
    @endif

    <!-- form edit -->
    <hr>
    <div class="mt-4">
        <h2>{{ isset($editProduct) ? 'Edit Produk' : 'Tambah Produk' }}</h2>

        <form action="{{ isset($editProduct) ? route('products.update', $editProduct->id) : route('products.store') }}" method="POST">
            @csrf
            @if(isset($editProduct))
                @method('PUT')
            @endif

            <div class="mb-3">
                <label for="name" class="form-label">Nama Produk</label>
                <input type="text" name="name" class="form-control"
                    value="{{ isset($editProduct) ? $editProduct->name : '' }}" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Deskripsi</label>
                <textarea name="description" class="form-control" required>{{ isset($editProduct) ? $editProduct->description : '' }}</textarea>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Harga</label>
                <input type="number" name="price" class="form-control"
                    value="{{ isset($editProduct) ? $editProduct->price : '' }}" required>
            </div>

            <div class="mb-3">
                <label for="stock" class="form-label">Stok</label>
                <input type="number" name="stock" class="form-control"
                    value="{{ isset($editProduct) ? $editProduct->stock : '' }}" required>
            </div>

            <button type="submit" class="btn btn-primary">
                {{ isset($editProduct) ? 'Update' : 'Tambah' }}
            </button>
        </form>
    </div>
</div>
</body>
</html>
