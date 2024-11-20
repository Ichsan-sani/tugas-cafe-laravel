@extends('templates.app')

@section('content-dinamis')
    <form action="{{ route('products.update', $product['id']) }}" method="POST">
        @method('PATCH')
        @csrf


        <div class="mb-3 row">
            <div class="form-group mb-3">
                <label for="name" class="form-label">Nama Produk</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Masukkan Nama Produk"
                    value="{{ $product['name'] }}">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="description" class="form-label">Description</label>
            <input type="text" name="description" id="description" class="form-control"
                placeholder="Masukkan Deskripsi Produk" value="{{ $product['description'] }}">
        </div>

        <div class="mb-3 row">
            <div class="form-group mb-3">
                <label for="name" class="form-label">Harga</label>
                <input type="number" name="price" id="price" class="form-control" placeholder="Masukkan Harga"
                    value="{{ $product['price'] }}">
            </div>
        </div>

        <div class="mb-3 row">
            <div class="form-group mb-3">
                <label for="name" class="form-label">Stock</label>
                <input type="number" name="stock" id="stock" class="form-control" placeholder="Masukkan Harga"
                    value="{{ $product['stock'] }}">
            </div>
        </div>

        <div class="mb-4">
            <label for="type" class="form-label text-muted fw-medium">Jenis</label>
            <select class="form-select form-select-lg border-0 bg-light" name="type" id="type">
                <option selected disabled hidden>Pilih jenis</option>
                <option value="Minuman" {{ $product['type'] == 'Minuman' ? 'selected' : '' }}>Minuman</option>
                <option value="Makanan" {{ $product['type'] == 'Makanan' ? 'selected' : '' }}>Makanan</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update Product</button>
    </form>
@endsection
