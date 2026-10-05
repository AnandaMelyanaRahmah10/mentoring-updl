<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login - Mentoring Report PLN</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: Arial, Helvetica, sans-serif;
            background: #f4f7fb;

            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-wrapper {
            width: 100%;
            max-width: 420px;
            padding: 20px;
        }

        .login-card {
            background: white;
            border-radius: 14px;
            padding: 35px;

            box-shadow: 0 10px 35px rgba(0,0,0,0.08);
        }

        .logo {
            text-align: center;
            margin-bottom: 30px;
        }

        .logo h1 {
            margin: 0;
            font-size: 26px;
            color: #1f2937;
        }

        .logo p {
            margin-top: 8px;
            color: #6b7280;
            font-size: 14px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-size: 14px;
            font-weight: bold;
            color: #374151;
        }

        input {
            width: 100%;
            padding: 13px 14px;

            border: 1px solid #d1d5db;
            border-radius: 8px;

            font-size: 14px;
            outline: none;
        }

        input:focus {
            border-color: #2563eb;
        }

        button {
            width: 100%;
            padding: 13px;

            border: none;
            border-radius: 8px;

            background: #2563eb;
            color: white;

            font-size: 15px;
            font-weight: bold;

            cursor: pointer;
        }

        button:hover {
            background: #1d4ed8;
        }

        .error {
            background: #fee2e2;
            color: #991b1b;

            padding: 12px;
            border-radius: 8px;

            margin-bottom: 20px;

            font-size: 14px;
        }

        .success {
            background: #dcfce7;
            color: #166534;

            padding: 12px;
            border-radius: 8px;

            margin-bottom: 20px;

            font-size: 14px;
        }

        .footer {
            text-align: center;
            margin-top: 25px;

            font-size: 12px;
            color: #9ca3af;
        }
    </style>
</head>

<body>

<div class="login-wrapper">

    <div class="login-card">

        <div class="logo">
            <h1>Mentoring Report</h1>

            <p>
                Sistem Monitoring Mentoring<br>
                PLN Pusdiklat
            </p>
        </div>


        {{-- Pesan berhasil --}}

        @if(session('success'))

            <div class="success">
                {{ session('success') }}
            </div>

        @endif


        {{-- Pesan error --}}

        @if($errors->any())

            <div class="error">
                {{ $errors->first() }}
            </div>

        @endif


        <form method="POST" action="{{ route('login.process') }}">

            @csrf

            <div class="form-group">

                <label for="username">
                    Username
                </label>

                <input
                    type="text"
                    id="username"
                    name="username"
                    value="{{ old('username') }}"
                    placeholder="Masukkan username"
                    autocomplete="username"
                    required
                >

            </div>


            <div class="form-group">

                <label for="password">
                    Password
                </label>

                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Masukkan password"
                    autocomplete="current-password"
                    required
                >

            </div>


            <button type="submit">
                Login
            </button>

        </form>


        <div class="footer">
            Sistem Internal PLN Pusdiklat
        </div>

    </div>

</div>

</body>
</html>