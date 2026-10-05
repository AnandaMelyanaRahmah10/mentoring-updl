<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Master Data - Mentoring Report PLN</title>

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

        .user-name {
            font-size: 14px;
            color: #4b5563;
        }

        .logout {
            border: none;
            background: #dc2626;
            color: white;

            padding: 9px 15px;

            border-radius: 7px;

            cursor: pointer;
        }

        .container {
            padding: 35px;
        }

        .header {
            margin-bottom: 30px;
        }

        .header h1 {
            margin: 0 0 8px;
            font-size: 28px;
        }

        .header p {
            margin: 0;
            color: #6b7280;
        }

        .back {
            display: inline-block;

            margin-bottom: 20px;

            color: #2563eb;

            text-decoration: none;

            font-size: 14px;
        }

        .menu {
            display: grid;

            grid-template-columns:
                repeat(3, 1fr);

            gap: 20px;
        }

        .card {
            background: white;

            border-radius: 12px;

            padding: 25px;

            border: 1px solid #e5e7eb;

            text-decoration: none;

            color: inherit;

            transition: 0.2s;
        }

        .card:hover {

            transform:
                translateY(-3px);

            box-shadow:
                0 8px 20px
                rgba(0,0,0,0.08);
        }

        .icon {
            width: 50px;
            height: 50px;

            border-radius: 10px;

            background: #eff6ff;

            display: flex;

            align-items: center;
            justify-content: center;

            margin-bottom: 18px;

            font-size: 24px;
        }

        .card h3 {
            margin:
                0 0 10px;
        }

        .card p {

            margin: 0;

            color: #6b7280;

            font-size: 14px;

            line-height: 1.5;
        }

        @media (max-width: 800px) {

            .menu {
                grid-template-columns: 1fr;
            }

        }

    </style>

</head>

<body>


<nav class="navbar">

    <div class="brand">
        Mentoring Report PLN
    </div>

    <div class="user-area">

        <span class="user-name">

            {{ auth()->user()->name }}

        </span>


        <form method="POST"
              action="{{ route('logout') }}">

            @csrf

            <button
                type="submit"
                class="logout">

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
            Master Data
        </h1>

        <p>
            Kelola data utama sistem
            Mentoring Report PLN Pusdiklat.
        </p>

    </div>


    <div class="menu">


        <!-- DATA UPDL -->

        
        <a href="{{ route('master.updl.index') }}"
        class="card">

            <div class="icon">
                🏢
            </div>

            <h3>
                Data UPDL
            </h3>

            <p>

                Mengelola data Unit
                Pelaksana Diklat
                (UPDL) yang mengikuti
                proses mentoring.

            </p>

        </a>


        <!-- DATA PERIODE -->

            <a
        href="{{ route('master.periode.index') }}"
        class="card">

        <div class="icon">
            📅
        </div>

        <h3>
            Data Periode
        </h3>

        <p>

            Mengelola periode
            mentoring berdasarkan
            bulan dan tahun.

        </p>

    </a>


        <!-- DATA KRITERIA -->

        <a
        href="{{ route('master.kriteria.index') }}"
        class="card">

        <div class="icon">
            📋
        </div>

        <h3>
            Data Kriteria Penilaian
        </h3>

        <p>

            Mengelola 30 kriteria
            penilaian mentoring
            beserta kelompok PLAN,
            DO, CHECK dan ACT.

        </p>

    </a>

    </div>


</main>


</body>

</html>