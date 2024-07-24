<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Midtrans\Config;
use Midtrans\Snap;

class CheckoutController extends Controller
{
    public function index(Request $request)
    {
        // Mendapatkan nilai quantity dari query parameter
        $quantity = $request->input('quantity', 1);

        // Mengirimkan data ke halaman checkout.blade.php
        return view('checkout', ['quantity' => $quantity]);
    }

    public function process(Request $request)
    {
        // Set konfigurasi Midtrans
        Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        Config::$isProduction = env('MIDTRANS_IS_PRODUCTION', false);
        Config::$isSanitized = true;
        Config::$is3ds = true;

        $quantity = $request->input('quantity', 1);
        $pricePerTicket = 15000;
        $grossAmount = $quantity * $pricePerTicket;

        // Data transaksi
        $transaction_details = [
            'order_id' => uniqid(),
            'gross_amount' => $grossAmount, // Nominal pembayaran
        ];

        // Data item
        $item_details = [
            [
                'id' => 'item1',
                'price' => $pricePerTicket,
                'quantity' => $quantity,
                'name' => 'Nama Seminar'
            ],
        ];

        // Data pelanggan
        $customer_details = [
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
        ];

        // Memastikan 'callbacks' tertulis dengan benar
        $callbacks = [
            'finish' => route('checkout.success')
        ];

        // Membuat parameter transaksi
        $params = [
            'transaction_details' => $transaction_details,
            'item_details' => $item_details,
            'customer_details' => $customer_details,
            'callbacks' => $callbacks,
        ];

        try {
            // Mendapatkan URL redirect pembayaran dari Midtrans
            $paymentUrl = Snap::createTransaction($params)->redirect_url;

            // Simpan informasi yang diperlukan ke session agar bisa digunakan di halaman sukses
            session([
                'first_name' => $customer_details['first_name'],
                'quantity' => $quantity,
                'gross_amount' => $grossAmount,
            ]);

            // Redirect ke halaman pembayaran
            return redirect($paymentUrl);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function success(Request $request)
    {
        // Ambil data dari request, jika ada parameter yang dikirim oleh Midtrans
        $order_id = $request->input('order_id');
        $status_code = $request->input('status_code');
        $transaction_status = $request->input('transaction_status');
        $payment_method = $request->input('payment_type');

        // Ambil data dari session
        $first_name = session('first_name');
        $quantity = session('quantity');
        $gross_amount = session('gross_amount');

        $event_name = "Nama Seminar"; // Anda bisa mendapatkan ini dari database atau sumber lain
        $event_date = "14 February 2025"; // Anda bisa mendapatkan ini dari database atau sumber lain
        $event_location = "Alamat Lokasi Acara"; // Anda bisa mendapatkan ini dari database atau sumber lain

        // Tentukan pesan berdasarkan status transaksi
        $message = ($transaction_status == 'settlement') ? 'Pembayaran Berhasil' : 'Pembayaran Gagal';

        // Menampilkan halaman success dengan informasi yang relevan
        return view('success', compact('order_id', 'first_name', 'quantity', 'event_name', 'event_date', 'event_location', 'gross_amount', 'payment_method', 'message'));
    }
}
