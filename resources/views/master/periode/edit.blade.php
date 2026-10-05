<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>
        Edit Periode - Mentoring Report PLN
    </title>

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;

            font-family:
                Arial,
                Helvetica,
                sans-serif;

            background: #f4f7fb;

            color: #1f2937;
        }

        /* =========================
           NAVBAR
        ========================= */

        .navbar {
            height: 65px;

            background: white;

            border-bottom:
                1px solid #e5e7eb;

            display: flex;

            align-items: center;

            justify-content: space-between;

            padding: 0 30px;
        }

        .brand {
            font-size: 20px;

            font-weight: bold;
        }

        .brand span {
            color: #2563eb;
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

        /* =========================
           CONTAINER
        ========================= */

        .container {
            max-width: 800px;

            margin: 0 auto;

            padding: 35px 20px;
        }

        .back {
            display: inline-block;

            margin-bottom: 20px;

            color: #2563eb;

            text-decoration: none;

            font-size: 14px;
        }

        .header {
            margin-bottom: 25px;
        }

        .header h1 {
            margin: 0 0 8px;

            font-size: 28px;
        }

        .header p {
            margin: 0;

            color: #6b7280;
        }

        /* =========================
           CARD
        ========================= */

        .card {
            background: white;

            border:
                1px solid #e5e7eb;

            border-radius: 12px;

            padding: 30px;
        }

        /* =========================
           FORM
        ========================= */

        .form-group {
            margin-bottom: 22px;
        }

        .form-group label {
            display: block;

            margin-bottom: 8px;

            font-size: 14px;

            font-weight: bold;
        }

        .form-group select {
            width: 100%;

            padding: 12px 13px;

            border:
                1px solid #d1d5db;

            border-radius: 7px;

            background: white;

            font-size: 14px;

            outline: none;
        }

        .form-group select:focus {
            border-color: #2563eb;

            box-shadow:
                0 0 0 3px
                rgba(37, 99, 235, 0.1);
        }

        .required {
            color: #dc2626;
        }

        .error {
            margin-top: 6px;

            color: #dc2626;

            font-size: 12px;
        }

        /* =========================
           INFO
        ========================= */

        .info {
            background: #eff6ff;

            border:
                1px solid #bfdbfe;

            color: #1e40af;

            padding: 14px 16px;

            border-radius: 8px;

            margin-bottom: 25px;

            font-size: 13px;

            line-height: 1.5;
        }

        /* =========================
           BUTTON
        ========================= */

        .buttons {
            display: flex;

            gap: 10px;

            margin-top: 10px;
        }

        .btn {
            padding: 11px 18px;

            border: none;

            border-radius: 7px;

            cursor: pointer;

            text-decoration: none;

            font-size: 14px;

            display: inline-block;
        }

        .btn-primary {
            background: #2563eb;

            color: white;
        }

        .btn-primary:hover {
            background: #1d4ed8;
        }

        .btn-secondary {
            background: #e5e7eb;

            color: #374151;
        }

        .btn-secondary:hover {
            background: #d1d5db;
        }

        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 600px) {

            .navbar {
                padding: 0 15px;
            }

            .brand {
                font-size: 16px;
            }

            .user-name {
                display: none;
            }

            .container {
                padding: 25px 15px;
            }

            .card {
                padding: 20px;
            }

            .header h1 {
                font-size: 24px;
            }

            .buttons {
                flex-direction: column;
            }

            .btn {
                width: 100%;

                text-align: center;
            }

        }

    </style>

</head>


<body>


<!-- =========================
     NAVBAR
========================= -->

<nav class="navbar">

    <div class="brand">

        Mentoring
        <span>Report PLN</span>

    </div>


    <div class="user-area">

        <span class="user-name">

            {{ auth()->user()->name }}

        </span>


        <form
            method="POST"
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


<!-- =========================
     CONTENT
========================= -->

<main class="container">


    <a
        href="{{ route('master.periode.index') }}"
        class="back">

        ← Kembali ke Data Periode

    </a>


    <div class="header">

        <h1>
            Edit Periode
        </h1>

        <p>
            Perbarui data periode mentoring.
        </p>

    </div>


    <div class="card">


        <div class="info">

            <strong>Perhatian:</strong>

            Perubahan periode akan memengaruhi
            data mentoring yang menggunakan
            periode tersebut.

        </div>


        <form
            method="POST"
            action="{{ route(
                'master.periode.update',
                $periode->id
            ) }}">

            @csrf

            @method('PUT')


            <!-- =========================
                 BULAN
            ========================= -->

            <div class="form-group">

                <label for="bulan">

                    Bulan
                    <span class="required">*</span>

                </label>


                <select
                    id="bulan"
                    name="bulan"
                    required>

                    @php

                        $namaBulan = [

                            1 => 'Januari',
                            2 => 'Februari',
                            3 => 'Maret',
                            4 => 'April',
                            5 => 'Mei',
                            6 => 'Juni',
                            7 => 'Juli',
                            8 => 'Agustus',
                            9 => 'September',
                            10 => 'Oktober',
                            11 => 'November',
                            12 => 'Desember',

                        ];

                    @endphp


                    @foreach($namaBulan as $key => $nama)

                        <option
                            value="{{ $key }}"
                            {{ old(
                                'bulan',
                                $periode->bulan
                            ) == $key
                                ? 'selected'
                                : '' }}>

                            {{ $nama }}

                        </option>

                    @endforeach

                </select>


                @error('bulan')

                    <div class="error">

                        {{ $message }}

                    </div>

                @enderror

            </div>


            <!-- =========================
                 TAHUN
            ========================= -->

            <div class="form-group">

                <label for="tahun">

                    Tahun
                    <span class="required">*</span>

                </label>


                <select
                    id="tahun"
                    name="tahun"
                    required>

                    @for(
                        $tahun = date('Y') - 2;
                        $tahun <= date('Y') + 3;
                        $tahun++
                    )

                        <option
                            value="{{ $tahun }}"
                            {{ old(
                                'tahun',
                                $periode->tahun
                            ) == $tahun
                                ? 'selected'
                                : '' }}>

                            {{ $tahun }}

                        </option>

                    @endfor

                </select>


                @error('tahun')

                    <div class="error">

                        {{ $message }}

                    </div>

                @enderror

            </div>


            <!-- =========================
                 STATUS
            ========================= -->

            <div class="form-group">

                <label for="status">

                    Status
                    <span class="required">*</span>

                </label>


                <select
                    id="status"
                    name="status"
                    required>

                    <option
                        value="aktif"
                        {{ old(
                            'status',
                            $periode->status
                        ) == 'aktif'
                            ? 'selected'
                            : '' }}>

                        Aktif

                    </option>


                    <option
                        value="nonaktif"
                        {{ old(
                            'status',
                            $periode->status
                        ) == 'nonaktif'
                            ? 'selected'
                            : '' }}>

                        Nonaktif

                    </option>

                </select>

            </div>


            <!-- =========================
                 BUTTON
            ========================= -->

            <div class="buttons">

                <button
                    type="submit"
                    class="btn btn-primary">

                    Simpan Perubahan

                </button>


                <a
                    href="{{ route(
                        'master.periode.index'
                    ) }}"
                    class="btn btn-secondary">

                    Batal

                </a>

            </div>


        </form>

    </div>


</main>


</body>

</html>