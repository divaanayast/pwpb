<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #F8E8FF;
            background-image: 
                linear-gradient(90deg, rgba(219, 112, 219, 0.1) 1px, transparent 1px),
                linear-gradient(rgba(219, 112, 219, 0.1) 1px, transparent 1px);
            background-size: 20px 20px;
            font-family: 'Courier New', monospace;
        }

        .container {
            background-color: rgba(255, 240, 255, 0.9);
            border: 4px solid #DDA0DD;
            border-radius: 8px;
            padding: 30px;
            max-width: 500px;
            image-rendering: pixelated;
            box-shadow: 8px 8px 0 rgba(219, 112, 219, 0.2);
        }

        h2 {
            color: #BA55D3;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 30px;
            text-shadow: 2px 2px 0 rgba(219, 112, 219, 0.2);
        }

        .form-control {
            border: 3px solid #DDA0DD;
            border-radius: 0;
            background-color: #FFF0FF;
            padding: 12px;
            margin-bottom: 15px;
        }

        .form-control:focus {
            box-shadow: 4px 4px 0 rgba(219, 112, 219, 0.2);
            border-color: #BA55D3;
            background-color: #FFF;
        }

        .form-label {
            color: #BA55D3;
            font-weight: bold;
            text-transform: uppercase;
            font-size: 14px;
        }

        .btn-primary {
            background-color: #DDA0DD;
            border: 3px solid #BA55D3;
            border-radius: 0;
            padding: 12px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
            box-shadow: 4px 4px 0 rgba(219, 112, 219, 0.2);
            transition: all 0.2s ease;
        }

        .btn-primary:hover {
            background-color: #BA55D3;
            border-color: #DDA0DD;
            transform: translate(2px, 2px);
            box-shadow: 2px 2px 0 rgba(219, 112, 219, 0.2);
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

        .text-danger {
            color: #FF69B4 !important;
            font-size: 12px;
            margin-top: -10px;
            margin-bottom: 10px;
            font-weight: bold;
        }

        a {
            color: #BA55D3;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            color: #DDA0DD;
            text-decoration: underline;
        }

        center {
            margin-top: 15px;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center">Form Registrasi</h2>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('register') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" name="name" class="form-control" required>
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required>
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required>
                @error('password')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                <input type="password" name="password_confirmation" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">Daftar</button>
            <center>Sudah punya akun? <a href="/login">Login</a></center>
        </form>
    </div>
</body>

</html>