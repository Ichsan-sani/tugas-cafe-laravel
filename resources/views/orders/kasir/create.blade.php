@extends('templates.app')
@section('content-dinamis')
    <div class="container mt-3">
        <form action="{{ route('orders.store') }}" method="POST" class="card m-auto p-5">
            @csrf
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (Session::get('failed'))
                <div class="alert alert-danger">
                    {!! nl2br(e(Session::get('failed'))) !!}
                </div>
            @endif

            <p>Penanggung jawab: <b>{{ Auth::user()->name }}</b></p>

            <div class="row mb-3">
                <label for="name_customer" class="col-sm-2 col-form-label">Nama Pembeli</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name_customer" name="name_customer"
                        value="{{ old('name_customer') }}" required>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Obat</label>
                <div class="col-sm-10" id="items-container">
                    <div class="item-row">
                        <select name="items[]" class="form-select mb-2" required>
                            <option value="">Pilih Obat</option>
                            @foreach ($items as $item)
                                <option value="{{ $item->id }}" data-stock="{{ $item->stock }}"
                                    data-price="{{ $item->price }}">
                                    {{ $item->name }} (Stok: {{ $item->stock }}, Harga:
                                    {{ number_format($item->price) }})
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div id="additional-items"></div>
                    <button type="button" id="add-item" class="btn btn-secondary mt-2">+ Tambah Pesanan</button>
                </div>
            </div>

            <button type="submit" class="btn btn-primary btn-block">Konfirmasi Pembelian</button>
        </form>
    </div>
@endsection

@push('script')
    <script>
        $(document).ready(function() {
            let itemCount = 1;

            $('#add-item').click(function() {
                itemCount++;
                let newItemRow = `
            <div class="item-row position-relative mb-2">
                <select name="items[]" class="form-select" required>
                    <option value="">Pilih Obat</option>
                    @foreach ($items as $item)
                        <option value="{{ $item->id }}" data-stock="{{ $item->stock }}" data-price="{{ $item->price }}">
                            {{ $item->name }} (Stok: {{ $item->stock }}, Harga: {{ number_format($item->price) }})
                        </option>
                    @endforeach
                </select>
                <button type="button" class="btn btn-danger btn-sm position-absolute top-0 end-0 remove-item">X</button>
            </div>
        `;
                $('#additional-items').append(newItemRow);
            });

            $(document).on('click', '.remove-item', function() {
                $(this).closest('.item-row').remove();
            });
        });
    </script>
@endpush
