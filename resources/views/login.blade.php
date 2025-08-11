<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        body {
            min-height: 100vh;
            background: linear-gradient(120deg, #e3f0ff 0%, #b6d0ff 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', Arial, sans-serif;
        }
        .login-card {
            max-width: 370px;
            width: 100%;
            padding: 2.5rem 2rem 2rem 2rem;
            border-radius: 22px;
            background: rgba(255,255,255,0.85);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.18);
            border: 1.5px solid #cce3ff;
            backdrop-filter: blur(8px);
            position: relative;
        }
        .login-card::before {
            content: '';
            position: absolute;
            top: -30px; left: -30px;
            width: 80px; height: 80px;
            background: linear-gradient(135deg, #b6d0ff 0%, #e3f0ff 100%);
            border-radius: 50%;
            z-index: 0;
            opacity: 0.5;
        }
        .login-card::after {
            content: '';
            position: absolute;
            bottom: -30px; right: -30px;
            width: 80px; height: 80px;
            background: linear-gradient(135deg, #e3f0ff 0%, #b6d0ff 100%);
            border-radius: 50%;
            z-index: 0;
            opacity: 0.5;
        }
        .login-card h3 {
            margin-bottom: 2rem;
            font-weight: 800;
            color: #1976d2;
            letter-spacing: 1px;
            text-align: center;
            position: relative;
            z-index: 1;
        }
        .input-group {
            margin-bottom: 1.3rem;
            position: relative;
            z-index: 1;
        }
        .input-group-text {
            background: transparent;
            border: none;
            color: #1976d2;
            font-size: 1.2rem;
        }
        .form-control {
            border-radius: 12px;
            border: 1.5px solid #90caf9;
            background: rgba(255,255,255,0.9);
            font-size: 1rem;
            color: #444;
            transition: border-color 0.2s;
        }
        .form-control:focus {
            border-color: #1976d2;
            box-shadow: 0 0 0 0.15rem rgba(25,118,210,0.15);
            background: #fff;
        }
        .form-label {
            font-weight: 600;
            color: #1976d2;
            margin-bottom: 0.3rem;
        }
        .btn-login {
            background: linear-gradient(90deg, #1976d2 0%, #64b5f6 100%);
            border: none;
            border-radius: 12px;
            font-weight: 700;
            letter-spacing: 1px;
            color: #fff;
            box-shadow: 0 2px 8px rgba(25,118,210,0.12);
            transition: background 0.3s, transform 0.2s;
            margin-top: 0.5rem;
        }
        .btn-login:hover {
            background: linear-gradient(90deg, #64b5f6 0%, #1976d2 100%);
            transform: translateY(-2px) scale(1.03);
        }
        @media (max-width: 480px) {
            .login-card {
                padding: 1.5rem 1rem;
            }
        }
    </style>
</head>

<body>
    <div class="login-card">
        <h3>Login</h3>
        <form action="/login" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                    <input type="text" name="email" id="email" class="form-control" required autofocus>
                </div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fa fa-lock"></i></span>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>
            </div>
            <button type="submit" class="btn btn-login w-100">Login</button>
        </form>
    </div>
</body>

</html>
