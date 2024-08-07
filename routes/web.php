<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CheckoutController;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Http\Controllers\TicketManagementController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReportController;

Route::get('/', function () {
    return view('index');
});

Route::get('/pageTiket', function () {
    return view('pageTiket');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/kategori', function () {
    return view('kategori');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::post('/checkout/process', [CheckoutController::class, 'process'])->name('checkout.process');

Route::get('/checkout/success', [CheckoutController::class, 'success'])->name('checkout.success');
Route::get('/success', [CheckoutController::class, 'success'])->name('success');

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('/home-dashboard', function () {
    return view('dashboard.home');
});

// Route untuk menampilkan halaman manajemen seminar
Route::get('/dashboard/seminar-management', function () {
    $seminars = [
        ['id' => 1, 'title' => 'Seminar Teknologi', 'date' => '2024-08-10', 'location' => 'Jakarta'],
        ['id' => 2, 'title' => 'Seminar Kesehatan', 'date' => '2024-09-15', 'location' => 'Bandung'],
        ['id' => 3, 'title' => 'Seminar Kesehatan', 'date' => '2024-09-15', 'location' => 'Bandung'],
        ['id' => 4, 'title' => 'Seminar Kesehatan', 'date' => '2024-09-15', 'location' => 'Bandung'],
        ['id' => 5, 'title' => 'Seminar Kesehatan', 'date' => '2024-09-15', 'location' => 'Bandung'],
        ['id' => 6, 'title' => 'Seminar Kesehatan', 'date' => '2024-09-15', 'location' => 'Bandung'],
        ['id' => 7, 'title' => 'Seminar Kesehatan', 'date' => '2024-09-15', 'location' => 'Bandung'],
        ['id' => 8, 'title' => 'Seminar Kesehatan', 'date' => '2024-09-15', 'location' => 'Bandung'],
        ['id' => 9, 'title' => 'Seminar Kesehatan', 'date' => '2024-09-15', 'location' => 'Bandung'],
        ['id' => 10, 'title' => 'Seminar Kesehatan', 'date' => '2024-09-15', 'location' => 'Bandung'],
        ['id' => 11, 'title' => 'Seminar Kesehatan', 'date' => '2024-09-15', 'location' => 'Bandung'],
    ];

    // Pagination settings
    $perPage = 10; // Jumlah item per halaman
    $currentPage = LengthAwarePaginator::resolveCurrentPage();
    $currentItems = array_slice($seminars, ($currentPage - 1) * $perPage, $perPage);
    $paginator = new LengthAwarePaginator($currentItems, count($seminars), $perPage, $currentPage, [
        'path' => LengthAwarePaginator::resolveCurrentPath(),
    ]);

    return view('dashboard.seminarM', ['seminars' => $paginator]);
})->name('dashboard.seminarM');

// Route untuk menambahkan seminar baru
Route::get('/seminars/create', function () {
    return view('seminars.create'); // Pastikan view ini ada
})->name('seminars.create');

// Route untuk mengedit seminar
Route::get('/seminars/{id}/edit', function ($id) {
    return view('seminars.edit', ['id' => $id]); // Pastikan view ini ada
})->name('seminars.edit');

// Route untuk menghapus seminar
Route::delete('/seminars/{id}', function ($id) {
    // Implementasikan logika untuk menghapus seminar
    return redirect()->back()->with('status', 'Seminar deleted successfully!');
})->name('seminars.destroy');

// Rute untuk menampilkan detail seminar
Route::get('/seminars/{id}', function ($id) {
    // Ambil data seminar berdasarkan ID
    $seminar = [
        'id' => $id,
        'title' => 'Seminar Teknologi',
        'date' => '2024-08-10',
        'location' => 'Jakarta',
        'description' => 'Deskripsi detail tentang seminar teknologi.'
    ];
    return view('seminars.show', ['seminar' => $seminar]);
})->name('seminars.show');

Route::get('/dashboard/ticket-management', [TicketManagementController::class, 'index'])->name('dashboard.ticketM');

Route::get('/dashboard/pengguna', [UserController::class, 'index'])->name('dashboard.pengguna');

Route::get('/dashboard/reports', [ReportController::class, 'index'])->name('dashboard.reports');