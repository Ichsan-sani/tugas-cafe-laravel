@extends('templates.app')
@section('content-dinamis')
    <div class="container mt-3">
        @if (Session::get('deleted'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{ Session::get('deleted') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="d-flex justify-content-between mb-3">
            <form action="{{ url()->current() }}" method="GET" class="d-flex">
                <div class="d-flex gap-2">
                    <input type="date" class="form-control" id="tanggal" name="tanggal"
                        value="{{ request('tanggal') }}">
                    <button type="submit" class="btn btn-primary">Cari</button>
                    <a href="{{ url()->current() }}" class="btn btn-secondary">Clear</a>
                </div>
            </form>
            <a href="{{ route('orders.export-excel') }}" class="btn btn-primary">Export Data (Excel)</a>
        </div>


        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th class="text-center">No</th>
                    <th>Pembeli</th>
                    <th>Obat</th>
                    <th>Total Bayar</th>
                    <th>Kasir</th>
                    <th>Tanggal Beli</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $index => $item)
                    <tr>
                        <td class="text-center">{{ ($orders->currentPage() - 1) * $orders->perPage() + ($index + 1) }}</td>
                        <td>{{ $item['name_customer'] }}</td>
                        <td>
                            <ul>
                                @foreach ($item['items'] as $product)
                                    <li>
                                        {{ $product['name_item'] }}
                                        ({{ number_format($product['price'], 0, ',', '.') }})
                                        : Rp {{ number_format($product['sub_price'], 0, ',', '.') }}
                                        <small>qty{{ $product['qty'] }}</small>
                                    </li>
                                @endforeach
                            </ul>
                        </td>
                        <td>Rp {{ number_format($item['total_price'], 0, ',', '.') }}</td>
                        <td>{{ $item['user']['name'] }}</td>
                        <td>{{ \Carbon\Carbon::parse($item->created_at)->timezone('Asia/Jakarta')->Format('d F Y H:i:s') }}
                        </td>
                        <td class="text-center">
                            <a href="{{ route('orders.download', $item['id']) }}" class="btn btn-secondary">Download
                                Struk</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="d-flex justify-content-end my-3">
            @if ($orders->count())
                {{ $orders->links() }}
            @endif
        </div>
    </div>
@endsection
