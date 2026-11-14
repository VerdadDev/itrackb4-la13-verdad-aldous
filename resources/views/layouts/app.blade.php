<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Manga Library')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; }
        .table thead th { background-color: #212529; color: #fff; border: none; }
        .table tbody tr:hover { background-color: #f1f1f1; }
        .card { border: none; box-shadow: 0 2px 10px rgba(0,0,0,.08); border-radius: .6rem; }
        .card-header { border-radius: .6rem .6rem 0 0 !important; }
        footer { border-top: 1px solid #dee2e6; color: #6c757d; font-size: .85rem; }
    </style>
</head>
<body>

    @include('partials._nav')

    <main class="container my-4">

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle-fill me-2"></i>{{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @yield('content')

    </main>

    <footer class="py-3">
        <div class="container text-center">
            &copy; {{ date('Y') }} My Manga Library &mdash; Aldous Malvin Verdad
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
