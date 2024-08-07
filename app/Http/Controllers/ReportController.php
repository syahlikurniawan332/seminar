<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        // Fetch reports data from database or any other data source
        $reports = [
            ['id' => 1, 'title' => 'Report 1', 'date' => '2024-01-01', 'status' => 'Completed'],
            ['id' => 2, 'title' => 'Report 2', 'date' => '2024-02-01', 'status' => 'Pending'],
        ];

        return view('dashboard.reports', compact('reports'));
    }
}
