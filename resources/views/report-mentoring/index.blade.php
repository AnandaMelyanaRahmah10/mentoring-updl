<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Report Mentoring - PLN</title>

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: #f4f7fb;
            color: #1f2937;
        }

        .navbar {
            height: 65px;
            background: white;
            border-bottom: 1px solid #e5e7eb;

            display: flex;
            align-items: center;
            justify-content: space-between;

            padding: 0 30px;
        }

        .brand {
            font-size: 20px;
            font-weight: bold;
        }

        .user-area {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .logout {
            background: #dc2626;
            color: white;
            border: none;
            padding: 9px 15px;
            border-radius: 7px;
            cursor: pointer;
        }

        .container {
            max-width: 1100px;
            margin: auto;
            padding: 35px;
        }

        .back {
            text-decoration: none;
            color: #2563eb;
        }

        .header {
            margin: 25px 0;
        }

        .header h1 {
            margin: 0 0 8px;
        }

        .header p {
            color: #6b7280;
        }

        .card {
            background: white;
            border: 1px solid #e5e7eb;
            border-radius: 14px;
            padding: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        select {
            width: 100%;
            padding: 12px;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            background: white;
        }

        .btn {
            padding: 12px 20px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-weight: bold;
        }

        .btn-primary {
            background: #2563eb;
            color: white;
        }

        .alert {
            padding: 14px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .success {
            background: #dcfce7;
            color: #166534;
        }

        .error {
            background: #fee2e2;
            color: #991b1b;
        }

    </style>

</head>

<body>

<nav class="navbar">

    <div class="brand">
        Mentoring Report PLN
    </div>

    <div class="user-area">

        <span>
            {{ auth()->user()->name }}
        </span>

        <form
            method="POST"
            action="{{ route('logout') }}">

            @csrf

            <button class="logout">
                Logout
            </button>

        </form>

    </div>

</nav>


<main class="container">

    <a
        href="{{ route('dashboard') }}"
        class="back">

        ← Kembali ke Dashboard

    </a>


    <div class="header">

        <h1>
            Report Mentoring
        </h1>

        <p>
            Pilih UPDL dan periode untuk
            mengisi hasil mentoring.
        </p>

    </div>


    @if(session('success'))

        <div class="alert success">
            {{ session('success') }}
        </div>

    @endif


    @if(session('error'))

        <div class="alert error">
            {{ session('error') }}
        </div>

    @endif


    <div class="card">

        <form
            method="GET"
            action="{{ route('report-mentoring.form') }}">


            <div class="form-group">

                <label>
                    UPDL
                </label>

                <select
                    name="updl_id"
                    required>

                    <option value="">
                        -- Pilih UPDL --
                    </option>

                    @foreach($updls as $updl)

                        <option
                            value="{{ $updl->id }}">

                            {{ $updl->nama_updl }}

                        </option>

                    @endforeach

                </select>

            </div>


            <div class="form-group">

                <label>
                    Periode
                </label>

                <select
                    name="periode_id"
                    required>

                    <option value="">
                        -- Pilih Periode --
                    </option>

                    @foreach($periodes as $periode)

                        <option
                            value="{{ $periode->id }}">

                            {{ $periode->nama_periode }}

                        </option>

                    @endforeach

                </select>

            </div>


            <button
                type="submit"
                class="btn btn-primary">

                Tampilkan Kriteria

            </button>

        </form>

    </div>

</main>

</body>

</html>