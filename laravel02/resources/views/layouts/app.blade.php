<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        html, body {
            height: 100%;
        }
        body {
            padding-top: 70px; /* space for fixed navbar */
            margin: 0;
        }
        .form-container {
            width: 100%;
            max-width: 800px;
            background: #cdcdcd;
            border: 1px solid black;
            border-radius: 20px;
            padding: 20px;
            margin: auto;
        }
    </style>
</head>
<body>

<!-- Fixed Top Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top border-bottom shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">Home</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="{{ url('/company') }}">Company</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/employee') }}">Employee</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/assistant') }}">Assistant</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/vector_store') }}">Vector Store</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/file') }}">File</a></li>
            </ul>
        </div>
    </div>
</nav>

@yield('content')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
