<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'To-Do List App')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #F0F7FF;
            background-image: 
                linear-gradient(90deg, rgba(179, 216, 253, 0.3) 1px, transparent 1px),
                linear-gradient(rgba(179, 216, 253, 0.3) 1px, transparent 1px);
            background-size: 20px 20px;
            font-family: 'Courier New', monospace;
            color: #7B8FA1;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.9);
            border: 4px solid #B4D4FF;
            border-radius: 0;
            padding: 30px;
            margin-top: 2rem;
            box-shadow: 8px 8px 0 rgba(180, 212, 255, 0.3);
            image-rendering: pixelated;
        }

        h2 {
            color: #86A7DC;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 30px;
            text-shadow: 2px 2px 0 rgba(134, 167, 220, 0.3);
        }

        .alert {
            border: 3px solid;
            border-radius: 0;
            padding: 15px;
            margin-bottom: 20px;
            box-shadow: 4px 4px 0 rgba(134, 167, 220, 0.2);
        }

        .alert-success {
            background-color: #E8FFE8;
            border-color: #B5E6B5;
            color: #4C9E4C;
        }

        .alert-danger {
            background-color: #FFE8E8;
            border-color: #E6B5B5;
            color: #9E4C4C;
        }

        hr {
            border: 2px solid #B4D4FF;
            opacity: 0.5;
            margin: 2rem 0;
        }

        footer {
            color: #86A7DC;
            font-size: 0.9rem;
            padding: 1rem;
            border-top: 4px solid #B4D4FF;
            margin-top: 2rem;
        }

        footer p {
            margin: 0;
            padding: 10px;
            background-color: rgba(255, 255, 255, 0.7);
            display: inline-block;
            border: 2px solid #B4D4FF;
            box-shadow: 4px 4px 0 rgba(134, 167, 220, 0.2);
        }

        /* Additional styles for common elements that might be in the content */
        .btn {
            border: 3px solid;
            border-radius: 0;
            box-shadow: 4px 4px 0 rgba(134, 167, 220, 0.2);
            transition: all 0.2s ease;
            text-transform: uppercase;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .btn:hover {
            transform: translate(2px, 2px);
            box-shadow: 2px 2px 0 rgba(134, 167, 220, 0.2);
        }

        .form-control {
            border: 3px solid #B4D4FF;
            border-radius: 0;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 12px;
            box-shadow: 4px 4px 0 rgba(134, 167, 220, 0.2);
        }

        .form-control:focus {
            box-shadow: 4px 4px 0 rgba(134, 167, 220, 0.4);
            border-color: #86A7DC;
        }

        .card {
            border: 3px solid #B4D4FF;
            border-radius: 0;
            box-shadow: 4px 4px 0 rgba(134, 167, 220, 0.2);
            background-color: rgba(255, 255, 255, 0.9);
        }

        .table {
            border: 3px solid #B4D4FF;
            background-color: rgba(255, 255, 255, 0.9);
        }

        .table th {
            background-color: #E8F1FF;
            border-bottom: 3px solid #B4D4FF;
            color: #86A7DC;
            text-transform: uppercase;
        }

        .table td {
            border-bottom: 2px solid #B4D4FF;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">@yield('header')</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        @yield('content')

        <footer class="mt-5 text-center">
            <hr>
            <p>&copy; {{ date('Y') }} To-Do List App - Dibuat dengan Laravel</p>
        </footer>
    </div>
</body>
</html>