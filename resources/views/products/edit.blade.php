@extends('templates.app')

@section('content-dinamis')
    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @if (Session::get('failed'))
            <div class="alert alert-danger">{{ Session::get('failed') }}</div>
        @endif
        @if (Session::get('success'))
            <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif
        <div class="form-group mb-3">
            <label for="name" class="form-label">Nama Product</label>
            <input type="text" name="name" id="name" class="form-control"
                placeholder="Masukkan Nama Makanan / Minuman" value="{{ old('name', $product->name) }}" required>
        </div>
        <div class="form-group mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" name="description" id="description" class="form-control"
                placeholder="Masukkan Deskripsi Produk" value="{{ old('description', $product->description) }}" required>
        </div>
        <div class="form-group mb-3">
            <label for="price" class="form-label">Harga</label>
            <input type="number" name="price" id="price" class="form-control" placeholder="Masukkan Harga"
                value="{{ old('price', $product->price) }}" required>
        </div>
        <div class="form-group mb-3">
            <label for="stock" class="form-label">Stock</label>
            <input type="number" name="stock" id="stock" class="form-control" placeholder="Masukkan Stock"
                value="{{ old('stock', $product->stock) }}" required>
        </div>
        <div class="form-group mb-3">
            <label for="type">Tipe</label>
            <select name="type" id="type" class="form-control" required>
                <option value="Makanan" {{ old('type', $product->type) == 'Makanan' ? 'selected' : '' }}>Makanan</option>
                <option value="Minuman" {{ old('type', $product->type) == 'Minuman' ? 'selected' : '' }}>Minuman</option>
            </select>
        </div>
        <div class="form-group mb-3">
            <label for="img">Gambar</label>
            <input type="file" name="img" class="form-control">
            @if ($product->img)
                <img src="{{ asset('storage/' . $product->img) }}" alt="Product Image" class="mt-2" width="100">
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
