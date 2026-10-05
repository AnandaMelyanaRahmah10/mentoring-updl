<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Input Report Mentoring - PLN</title>

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

        .user-area span {
            color: #4b5563;
            font-size: 14px;
        }

        .logout {
            border: none;
            background: #dc2626;
            color: white;
            padding: 9px 15px;
            border-radius: 7px;
            cursor: pointer;
        }

        .logout:hover {
            background: #b91c1c;
        }

        .container {
            max-width: 1500px;
            margin: auto;
            padding: 35px;
        }

        .back {
            display: inline-block;
            margin-bottom: 20px;
            color: #2563eb;
            text-decoration: none;
            font-size: 14px;
        }

        .back:hover {
            text-decoration: underline;
        }

        .header {
            margin-bottom: 25px;
        }

        .header h1 {
            margin: 0 0 8px;
            font-size: 28px;
        }

        .subtitle {
            color: #6b7280;
            margin: 0;
        }

        .alert {
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .alert-error {
            background: #fee2e2;
            color: #991b1b;
            border: 1px solid #fecaca;
        }

        .alert-success {
            background: #dcfce7;
            color: #166534;
            border: 1px solid #bbf7d0;
        }

        .select-card {
            background: white;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            padding: 25px;
            margin-bottom: 25px;
        }

        .select-card h3 {
            margin-top: 0;
            margin-bottom: 20px;
        }

        .select-grid {
            display: grid;
            grid-template-columns: 1fr 1fr auto;
            gap: 20px;
            align-items: end;
        }

        .form-group label {
            display: block;
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 8px;
        }

        select {
            width: 100%;
            padding: 11px;
            border: 1px solid #d1d5db;
            border-radius: 7px;
            background: white;
            font-family: inherit;
        }

        select:focus {
            outline: none;
            border-color: #2563eb;
            box-shadow: 0 0 0 2px rgba(37, 99, 235, 0.1);
        }

        .btn-primary {
            border: none;
            background: #2563eb;
            color: white;
            padding: 12px 20px;
            border-radius: 8px;
            font-weight: bold;
            cursor: pointer;
            white-space: nowrap;
        }

        .btn-primary:hover {
            background: #1d4ed8;
        }

        .info {
            background: white;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 25px;

            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .info-box {
            background: #f8fafc;
            padding: 15px;
            border-radius: 8px;
        }

        .info-box label {
            display: block;
            font-size: 13px;
            color: #6b7280;
            margin-bottom: 5px;
        }

        .info-box strong {
            font-size: 16px;
        }

        .table-box {
            background: white;
            border-radius: 12px;
            border: 1px solid #e5e7eb;
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 1400px;
        }

        th {
            background: #2563eb;
            color: white;
            padding: 13px;
            text-align: left;
            font-size: 13px;
            white-space: nowrap;
        }

        td {
            padding: 12px;
            border-bottom: 1px solid #e5e7eb;
            vertical-align: top;
            font-size: 13px;
        }

        tbody tr:hover {
            background: #f8fafc;
        }

        .point {
            text-align: center;
            font-weight: bold;
            width: 60px;
        }

        .kelompok {
            font-weight: bold;
            width: 100px;
        }

        .kriteria {
            min-width: 300px;
            line-height: 1.5;
        }

        .eviden-kebutuhan {
            min-width: 250px;
            line-height: 1.5;
        }

        textarea {
            width: 100%;
            min-height: 75px;

            border: 1px solid #d1d5db;
            border-radius: 7px;

            padding: 9px;
            resize: vertical;

            font-family: inherit;
            font-size: 13px;
        }

        textarea:focus {
            outline: none;
            border-color: #2563eb;
            box-shadow: 0 0 0 2px rgba(37, 99, 235, 0.1);
        }

        .status-select {
            width: 100px;
        }

        input[type="file"] {
            width: 210px;
            font-size: 12px;
        }

        .save-area {
            margin-top: 25px;
            display: flex;
            justify-content: flex-end;
        }

        .btn-save {
            border: none;
            background: #2563eb;
            color: white;

            padding: 13px 25px;

            border-radius: 8px;

            font-weight: bold;

            cursor: pointer;
        }

        .btn-save:hover {
            background: #1d4ed8;
        }

        .empty {
            background: white;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            padding: 40px;
            text-align: center;
            color: #6b7280;
        }

        @media(max-width: 900px) {

            .container {
                padding: 20px;
            }

            .select-grid {
                grid-template-columns: 1fr;
            }

            .info {
                grid-template-columns: 1fr;
            }

            .save-area {
                justify-content: stretch;
            }

            .btn-save {
                width: 100%;
            }

            .navbar {
                padding: 0 15px;
            }

            .brand {
                font-size: 16px;
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

        <span>
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


<main class="container">


    <a
        href="{{ route('report-mentoring.index') }}"
        class="back">

        ← Kembali ke Report Mentoring

    </a>


    <div class="header">

        <h1>
            Input Report Mentoring
        </h1>

        <p class="subtitle">

            Pilih UPDL dan periode,
            kemudian isi hasil penilaian
            berdasarkan kriteria mentoring.

        </p>

    </div>


    {{-- ERROR --}}

    @if($errors->any())

        <div class="alert alert-error">

            <strong>
                Terdapat kesalahan:
            </strong>

            <ul>

                @foreach($errors->all() as $error)

                    <li>
                        {{ $error }}
                    </li>

                @endforeach

            </ul>

        </div>

    @endif


    {{-- SUCCESS --}}

    @if(session('success'))

        <div class="alert alert-success">

            {{ session('success') }}

        </div>

    @endif


    {{-- =========================================
         PILIH UPDL DAN PERIODE
    ========================================== --}}

    <div class="select-card">

        <h3>
            Pilih UPDL dan Periode
        </h3>


        <form
            method="GET"
            action="{{ route('report-mentoring.form') }}">

            <div class="select-grid">


                {{-- UPDL --}}

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


                        @foreach($updls as $item)

                            <option
                                value="{{ $item->id }}"
                                @selected(
                                    isset($updl)
                                    && $updl
                                    && $updl->id == $item->id
                                )>

                                {{ $item->nama_updl }}

                            </option>

                        @endforeach

                    </select>

                </div>


                {{-- PERIODE --}}

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


                        @foreach($periodes as $item)

                            <option
                                value="{{ $item->id }}"
                                @selected(
                                    isset($periode)
                                    && $periode
                                    && $periode->id == $item->id
                                )>

                                {{ $item->bulan }}
                                {{ $item->tahun }}

                            </option>

                        @endforeach

                    </select>

                </div>


                <button
                    type="submit"
                    class="btn-primary">

                    Tampilkan Kriteria

                </button>

            </div>

        </form>

    </div>


    {{-- =========================================
         JIKA SUDAH PILIH UPDL + PERIODE
    ========================================== --}}

    @if($updl && $periode)


        {{-- INFORMASI --}}

        <div class="info">

            <div class="info-box">

                <label>
                    UPDL
                </label>

                <strong>
                    {{ $updl->nama_updl }}
                </strong>

            </div>


            <div class="info-box">

                <label>
                    Periode
                </label>

                <strong>

                    {{ $periode->bulan }}
                    {{ $periode->tahun }}

                </strong>

            </div>

        </div>


        {{-- =====================================
             FORM SIMPAN REPORT
        ====================================== --}}

        <form
            method="POST"
            action="{{ route('report-mentoring.store') }}"
            enctype="multipart/form-data">

            @csrf


            <input
                type="hidden"
                name="updl_id"
                value="{{ $updl->id }}">


            <input
                type="hidden"
                name="periode_id"
                value="{{ $periode->id }}">


            @if($kriterias->count() > 0)

                <div class="table-box">

                    <table>

                        <thead>

                            <tr>

                                <th>No</th>

                                <th>Kelompok</th>

                                <th>Kriteria Penilaian</th>

                                <th>Kebutuhan Eviden</th>

                                <th>K / I</th>

                                <th>Eviden</th>

                                <th>Catatan</th>

                                <th>Bukti</th>

                            </tr>

                        </thead>


                        <tbody>


                            @foreach($kriterias as $kriteria)

                                <tr>

                                    <td class="point">

                                        {{ $kriteria->nomor_point }}

                                    </td>


                                    <td class="kelompok">

                                        {{ $kriteria->kelompok }}

                                    </td>


                                    <td class="kriteria">

                                        {{ $kriteria->kriteria }}

                                    </td>


                                    <td class="eviden-kebutuhan">

                                        {{ $kriteria->kebutuhan_eviden }}

                                    </td>


                                    <td>

                                        <select
                                            name="status[{{ $kriteria->id }}]"
                                            class="status-select"
                                            required>

                                            <option value="">
                                                Pilih
                                            </option>

                                            <option value="K">
                                                K
                                            </option>

                                            <option value="I">
                                                I
                                            </option>

                                        </select>

                                    </td>


                                    <td>

                                        <textarea
                                            name="eviden[{{ $kriteria->id }}]"
                                            placeholder="Masukkan eviden...">{{ old('eviden.' . $kriteria->id) }}</textarea>

                                    </td>


                                    <td>

                                        <textarea
                                            name="catatan[{{ $kriteria->id }}]"
                                            placeholder="Masukkan catatan...">{{ old('catatan.' . $kriteria->id) }}</textarea>

                                    </td>


                                    <td>

                                        <input
                                            type="file"
                                            name="bukti[{{ $kriteria->id }}]">

                                        <small>
                                            PDF/JPG/PNG/DOC/XLS
                                        </small>

                                    </td>

                                </tr>

                            @endforeach

                        </tbody>

                    </table>

                </div>


                <div class="save-area">

                    <button
                        type="submit"
                        class="btn-save">

                        Simpan Report

                    </button>

                </div>

            @else

                <div class="empty">

                    <h3>
                        Belum ada kriteria penilaian
                    </h3>

                    <p>
                        Silakan tambahkan kriteria
                        melalui menu Master Data.
                    </p>

                </div>

            @endif

        </form>

    @endif


</main>

</body>

</html>