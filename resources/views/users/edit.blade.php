@extends('templates.app')

@section('content-dinamis')
    <form action="{{ route('update_user', $user['id']) }}" method="POST">
        @method('PATCH')
        @csrf
        
        
        <div class="mb-3 row">
            <div class="form-group mb-3">
                <label for="name" class="form-label">Nama User</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Masukkan Nama Produk" value="{{ $user['name'] }}">
            </div>
        </div>

        <div class="mb-3 row">
            <div class="form-group mb-3">
                <label for="name" class="form-label">Gmail</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan email" value="{{ $user['email'] }}">
            </div>
        </div>

        <div class="mb-3 row">
            <div class="form-group mb-3">
                <label for="name" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan password" value="{{ $user['password'] }}">
            </div>
        </div>

        <div class="mb-4">
            <label for="role" class="form-label text-muted fw-medium">role</label>
            <select class="form-select form-select-lg border-0 bg-light" name="role" id="role">
                <option selected disabled hidden>Pilih jenis</option>
                <option value="admin"  {{$user['role'] == 'admin' ? 'selected' : ''}}>admin</option>
                <option value="kasir" {{$user['role'] == 'kasir' ? 'selected' : ''}}>kasir</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update Product</button>
    </form>
@endsection
