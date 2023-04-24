@extends('layouts.app')
@section('title', 'Home')

@section('content')

    <div class="container">
        <div class="row mt-5">
            <h1 class="mb-3">Ini Invoice</h1>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Detail Pesanan</h5>
                    <table>
                        <tr>
                            <td>Nama</td>
                            <td>: {{ $order->nama }}</td>
                        </tr>
                        <tr>
                            <td>Phone</td>
                            <td>: {{ $order->phone }}</td>
                        </tr>
                        <tr>
                            <td>Qty</td>
                            <td>: {{ $order->qty }}</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>: {{ $order->alamat }}</td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td>: {{ $order->total_price }}</td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td>: {{ $order->status }}</td>
                        </tr>
                    </table>
            </div>
        </div>
    </div>

@endsection
