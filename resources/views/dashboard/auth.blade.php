<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/logo-removebg-preview.png') }}">
    <link rel="icon" href="{{ asset('assets/img/logo-removebg-preview.png') }}" type="image/x-icon">
    <title>T-ticket Dashboard</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{ asset('assets/css/soft-ui-dashboard.css?v=1.0.3') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/style-dashboard.css') }}">
</head>

<body>
   @include('dashboard.sidebar-d')

    <div class="container-fluid">
        @yield('content')
    </div>
    
    <!-- JavaScript for charts -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
</body>

</html>