@extends('templates.app')

@section('content-dinamis')
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @if (Session::get('failed'))
            <div class="alert alert-danger">{{ Session::get('failed') }}</div>
        @endif
        @if (Session::get('success'))
            <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif
        <div class="form-group mb-3">
            <label for="name" class="form-label">Nama Product</label>
            <input type="text" name="name" id="name" class="form-control"
                placeholder="Masukkan Nama Makanan / Minuman" value="{{ old('name') }}" required>
        </div>
        <div class="form-group mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" name="description" id="description" class="form-control"
                placeholder="Masukkan Deskripsi Produk" value="{{ old('description') }}" required>
        </div>
        <div class="form-group mb-3">
            <label for="price" class="form-label">Harga</label>
            <input type="number" name="price" id="price" class="form-control" placeholder="Masukkan Harga"
                value="{{ old('price') }}" required>
        </div>
        <div class="form-group mb-3">
            <label for="stock" class="form-label">Stock</label>
            <input type="number" name="stock" id="stock" class="form-control" placeholder="Masukkan Stock"
                value="{{ old('stock') }}" required>
        </div>
        <div class="form-group mb-3">
            <label for="type">Tipe</label>
            <select name="type" id="type" class="form-control" required>
                <option value="Makanan" {{ old('type') == 'Makanan' ? 'selected' : '' }}>Makanan</option>
                <option value="Minuman" {{ old('type') == 'Minuman' ? 'selected' : '' }}>Minuman</option>
            </select>
        </div>
        <div class="form-group mb-3">
            <label for="img">Gambar</label>
            <input type="file" name="img" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
