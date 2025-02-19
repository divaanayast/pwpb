<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #E6E6FA;
            background-image: 
                linear-gradient(90deg, rgba(0,0,0,.1) 1px, transparent 1px),
                linear-gradient(rgba(0,0,0,.1) 1px, transparent 1px);
            background-size: 20px 20px;
            font-family: 'Courier New', monospace;
        }

        .container {
            background-color: rgba(230, 230, 250, 0.9);
            border: 4px solid #9370DB;
            border-radius: 8px;
            padding: 30px;
            max-width: 500px;
            image-rendering: pixelated;
            box-shadow: 8px 8px 0 rgba(147, 112, 219, 0.3);
        }

        h2 {
            color: #663399;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 30px;
            text-shadow: 2px 2px 0 rgba(147, 112, 219, 0.3);
        }

        .form-control {
            border: 3px solid #9370DB;
            border-radius: 0;
            background-color: #F0E6FF;
            padding: 12px;
            margin-bottom: 15px;
        }

        .form-control:focus {
            box-shadow: 4px 4px 0 rgba(147, 112, 219, 0.3);
            border-color: #663399;
            background-color: #FFF;
        }

        .form-label {
            color: #663399;
            font-weight: bold;
            text-transform: uppercase;
            font-size: 14px;
        }

        .btn-primary {
            background-color: #9370DB;
            border: 3px solid #663399;
            border-radius: 0;
            padding: 12px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
            box-shadow: 4px 4px 0 rgba(147, 112, 219, 0.3);
            transition: all 0.2s ease;
        }

        .btn-primary:hover {
            background-color: #663399;
            border-color: #9370DB;
            transform: translate(2px, 2px);
            box-shadow: 2px 2px 0 rgba(147, 112, 219, 0.3);
        }

        .alert {
            border: 3px solid;
            border-radius: 0;
            padding: 15px;
            margin-bottom: 20px;
        }

        .alert-success {
            background-color: #E6FFE6;
            border-color: #90EE90;
            color: #006400;
        }

        .alert-danger {
            background-color: #FFE6E6;
            border-color: #FFB6C1;
            color: #8B0000;
        }

        a {
            color: #663399;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            color: #9370DB;
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center">Form Login</h2>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">Login</button>
            <center class="mt-3">Belum punya akun? <a href="/register">Register</a></center>
        </form>
    </div>
</body>

</html>