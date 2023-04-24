@extends('layouts.app')
@section('title', 'Home')

@section('content')

    @push('script')
        <script type="text/javascript">
            // For example trigger on button clicked, or any time you need
            var payButton = document.getElementById('pay-button');
            payButton.addEventListener('click', function() {
                // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
                window.snap.pay('{{$snapToken}}', {
                    onSuccess: function(result) {
                        /* You may add your own implementation here */
                        window.location.href = '/invoice/{{$order->id}}'
                        console.log(result);
                    },
                    onPending: function(result) {
                        /* You may add your own implementation here */
                        alert("wating your payment!");
                        console.log(result);
                    },
                    onError: function(result) {
                        /* You may add your own implementation here */
                        alert("payment failed!");
                        console.log(result);
                    },
                    onClose: function() {
                        /* You may add your own implementation here */
                        alert('you closed the popup without finishing the payment');
                    }
                })
            });
        </script>
    @endpush
    <div class="container">
        <div class="row mt-5">
            <h1 class="mb-3">Ini Toko</h1>
            <div class="card" style="width: 18rem;">
                <img class="mt-3 rounded-3"
                    src="data:image/jpeg;base64,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"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Semangka Local</h5>
                    <p class="card-text">Soal rasa tak pernah bohong asli suwer tekewer kewer.</p>
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
                            <td>: Rp. {{number_format($order->total_price)}}</td>
                        </tr>
                    </table>
                    <div>
                        <button id="pay-button" class="btn btn-primary ">Bayar Sekarang</button>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
