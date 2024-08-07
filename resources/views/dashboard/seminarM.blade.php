@extends('dashboard.auth')

@section('content')
<main class="main-content">
    <nav class="navbar d-flex justify-content-between align-items-center mb-4">
        <h6 class="font-weight-bolder">Seminar Management</h6>
        <div class="search d-flex align-items-center">
            <input type="text" class="form-control" placeholder="Search..." aria-label="Search">
            <i class="fas fa-search ml-2"></i>
        </div>
    </nav>

    <div class="content">
        <div class="container">
            <!-- Button to add new seminar -->
            <div class="mb-4 text-right">
                <a href="{{ route('seminars.create') }}" class="btn btn-primary btn-add-seminar">
                    <i class="fas fa-plus"></i> Add New Seminar
                </a>
            </div>

            <!-- Seminar List Table -->
            <div class="table-responsive">
                <table class="table table-hover table-bordered seminar-table">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Date</th>
                            <th>Location</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($seminars as $seminar)
                        <tr>
                            <td>{{ $seminar['id'] }}</td>
                            <td>{{ $seminar['title'] }}</td>
                            <td>{{ \Carbon\Carbon::parse($seminar['date'])->format('d M Y') }}</td>
                            <td>{{ $seminar['location'] }}</td>
                            <td class="d-flex justify-content-around">
                                <a href="{{ route('seminars.show', $seminar['id']) }}" class="btn btn-info btn-sm">
                                    <i class="fas fa-info-circle"></i> Detail
                                </a>
                                <a href="{{ route('seminars.edit', $seminar['id']) }}" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <form action="{{ route('seminars.destroy', $seminar['id']) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Pagination Links -->
            <div class="d-flex justify-content-center mt-4">
                {{ $seminars->links() }}
            </div>
        </div>
    </div>
</main>

<!-- Custom CSS -->
<style>
    .btn-add-seminar {
        background-color: #007bff;
        border-color: #007bff;
        color: white;
        font-size: 0.875rem;
        font-weight: 500;
        border-radius: 0.375rem;
    }
    .btn-add-seminar:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }
    .seminar-table thead th {
        background-color: #343a40;
        color: white;
        font-weight: bold;
    }
    .seminar-table tbody tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    .seminar-table tbody tr:hover {
        background-color: #e9ecef;
    }
    .btn-sm {
        padding: 0.25rem 0.5rem;
        font-size: 0.875rem;
        line-height: 1.5;
        border-radius: 0.2rem;
    }
    .pagination {
        display: flex;
        justify-content: center;
        margin: 0;
        padding: 0;
        list-style: none;
    }
    .pagination .page-item {
        margin: 0 0.25rem; /* Adjusted margin for spacing */
    }
    .pagination .page-link {
        padding: 0.5rem 1rem; /* Increased padding for larger width */
        font-size: 0.875rem;
        border-radius: 0.375rem;
        border: 1px solid #dee2e6;
        color: #007bff;
        transition: background-color 0.2s, border-color 0.2s;
    }
    .pagination .page-link:hover {
        background-color: #007bff;
        border-color: #007bff;
        color: white;
    }
    .pagination .page-item.active .page-link {
        background-color: #007bff;
        border-color: #007bff;
        color: white;
    }
    .pagination .page-item.disabled .page-link {
        color: #6c757d;
        pointer-events: none;
        background-color: #fff;
        border-color: #dee2e6;
    }
</style>


@endsection
