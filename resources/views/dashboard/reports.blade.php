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
    <div class="container mt-5">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4>Reports</h4>
                <a href="#" class="btn btn-primary">Generate New Report</a>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reports as $report)
                        <tr>
                            <td>{{ $report['id'] }}</td>
                            <td>{{ $report['title'] }}</td>
                            <td>{{ \Carbon\Carbon::parse($report['date'])->format('d M Y') }}</td>
                            <td>{{ $report['status'] }}</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-info mr-2">View</a>
                                <form action="#" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection