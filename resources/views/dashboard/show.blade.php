@extends('dashboard.auth')

@section('content')
<main class="main-content">
    <nav class="navbar d-flex justify-content-between align-items-center mb-4">
        <h6 class="font-weight-bolder">Detail Seminar</h6>
    </nav>

    <div class="content">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $seminar['title'] }}</h5>
                    <p class="card-text"><strong>Date:</strong> {{ $seminar['date'] }}</p>
                    <p class="card-text"><strong>Location:</strong> {{ $seminar['location'] }}</p>
                    <p class="card-text"><strong>Description:</strong> {{ $seminar['description'] }}</p>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
