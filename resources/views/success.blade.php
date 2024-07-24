@section('title', 'halaman pengambilan tiket')

<x-app>

    <div class="container">
        <h2 class="fw-bold">Pembayaran Sukses</h2>
        <p>Terima kasih, <strong>{{ $first_name }}</strong>, atas pembelian tiket Anda.</p>
        <p>ID Pesanan: <strong>{{ $order_id }}</strong></p>
        <p>Jumlah Tiket: <strong>{{ $quantity }}</strong></p>
        <p>Nama Acara: <strong>{{ $event_name }}</strong></p>
        <p>Tanggal Acara: <strong>{{ $event_date }}</strong></p>
        <p>Lokasi Acara: <strong>{{ $event_location }}</strong></p>
        <p>Harga Total: <strong>Rp {{ number_format($gross_amount, 0, ',', '.') }}</strong></p>
        <p>Metode Pembayaran: <strong>{{ ucfirst($payment_method) }}</strong></p>
        <p>Status: <strong>{{ $message }}</strong></p>

        <a href="#" class="btn btn-primary">Cetak Tiket</a>
        <p>Jika Anda memiliki pertanyaan, silakan hubungi kami di <a href="mailto:support@example.com">support@example.com</a>.</p>
        <a href="{{ url('/') }}" class="btn btn-primary">Kembali ke Beranda</a>
    </div>

</x-app>