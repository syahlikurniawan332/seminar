<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketManagementController extends Controller
{
    public function index()
    {
        // Data tiket manual
        $tickets = [
            [
                'id' => 1,
                'nama_acara' => 'Konferensi Teknologi 2024',
                'jenis_tiket' => 'VIP',
                'harga' => 100.00,
            ],
            [
                'id' => 2,
                'nama_acara' => 'Konferensi Teknologi 2024',
                'jenis_tiket' => 'Reguler',
                'harga' => 50.00,
            ],
        ];

        return view('dashboard.ticket-management', compact('tickets'));
    }
}