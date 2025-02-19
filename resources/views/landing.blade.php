<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List App</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #FFF5F5;
            background-image: 
                radial-gradient(#FFD1DC 8%, transparent 8%),
                radial-gradient(#F8B7CD 8%, transparent 8%);
            background-position: 0 0, 25px 25px;
            background-size: 50px 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
            font-family: 'Arial', sans-serif;
        }

        .landing-container {
            max-width: 600px;
            padding: 40px;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            box-shadow: 0 8px 32px rgba(255, 182, 193, 0.2);
            position: relative;
            overflow: hidden;
            border: 3px solid #FFD1DC;
        }

        .landing-container::before,
        .landing-container::after {
            content: '';
            position: absolute;
            width: 100px;
            height: 100px;
            background: 
                radial-gradient(circle at center, 
                    #FFB6C1 10%, 
                    #FFD1DC 30%, 
                    transparent 70%);
            opacity: 0.4;
        }

        .landing-container::before {
            top: -20px;
            left: -20px;
        }

        .landing-container::after {
            bottom: -20px;
            right: -20px;
        }

        h1 {
            color: #E494A9;
            font-size: 2.5rem;
            margin-bottom: 20px;
            position: relative;
            text-shadow: 2px 2px 4px rgba(228, 148, 169, 0.2);
        }

        h1::after {
            content: '';
            display: block;
            width: 150px;
            height: 3px;
            background: linear-gradient(to right, transparent, #FFB6C1, transparent);
            margin: 15px auto;
        }

        p {
            color: #9F8189;
            font-size: 1.2rem;
            margin-bottom: 30px;
        }

        .btn {
            padding: 12px 30px;
            margin: 10px;
            border: none;
            border-radius: 25px;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .btn::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 150%;
            height: 150%;
            background: radial-gradient(circle, rgba(255,255,255,0.3) 0%, transparent 70%);
            transform: translate(-50%, -50%) scale(0);
            transition: transform 0.5s ease;
        }

        .btn:hover::after {
            transform: translate(-50%, -50%) scale(1);
        }

        .btn-primary {
            background-color: #FFB6C1;
            color: white;
            box-shadow: 0 4px 15px rgba(255, 182, 193, 0.3);
        }

        .btn-primary:hover {
            background-color: #FF9AAC;
            transform: translateY(-2px);
        }

        .btn-secondary {
            background-color: #F8D7E3;
            color: #E494A9;
            box-shadow: 0 4px 15px rgba(248, 215, 227, 0.3);
        }

        .btn-secondary:hover {
            background-color: #FFE4E1;
            color: #E494A9;
            transform: translateY(-2px);
        }

        @media (max-width: 576px) {
            .landing-container {
                margin: 20px;
                padding: 20px;
            }

            h1 {
                font-size: 2rem;
            }

            .btn {
                display: block;
                margin: 10px auto;
                width: 80%;
            }
        }
    </style>
</head>
<body>
    <div class="landing-container">
        <h1>Selamat Datang di To-Do List App</h1>
        <p>Kelola tugas harian Anda dengan mudah dan efisien.</p>
        <a href="{{ route('register') }}" class="btn btn-primary">Daftar Sekarang</a>
        <a href="{{ route('login') }}" class="btn btn-secondary">Login</a>
    </div>
</body>
</html>