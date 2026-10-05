<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Tambah UPDL - Mentoring Report PLN</title>

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

        .brand span {
            color: #2563eb;
        }

        .back {
            text-decoration: none;
            color: #2563eb;
            font-size: 14px;
        }

        .container {
            max-width: 800px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .card {
            background: white;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            padding: 30px;
        }

        .header {
            margin-bottom: 30px;
        }

        .header h1 {
            margin: 0 0 8px;
            font-size: 25px;
        }

        .header p {
            margin: 0;
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
        }

        .required {
            color: #dc2626;
        }

        input,
        textarea,
        select {
            width: 100%;
            padding: 11px 12px;

            border: 1px solid #d1d5db;
            border-radius: 7px;

            font-size: 14px;
            font-family: inherit;

            outline: none;
        }

        input:focus,
        textarea:focus,
        select:focus {
            border-color: #2563eb;
        }

        textarea {
            min-height: 110px;
            resize: vertical;
        }

        .error {
            margin-top: 6px;
            color: #dc2626;
            font-size: 12px;
        }

        .buttons {
            display: flex;
            gap: 10px;
            margin-top: 25px;
        }

        .btn {
            padding: 11px 18px;
            border: none;
            border-radius: 7px;

            font-size: 14px;
            cursor: pointer;

            text-decoration: none;
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

        .info {
            background: #eff6ff;
            border: 1px solid #bfdbfe;
            color: #1e40af;

            padding: 12px 15px;
            border-radius: 7px;

            font-size: 13px;
            margin-bottom: 25px;
        }

    </style>

</head>

<body>


<!-- NAVBAR -->

<nav class="navbar">

    <div class="brand">

        Mentoring
        <span>Report PLN</span>

    </div>


    <a
        href="{{ route('master.updl.index') }}"
        class="back">

        ← Kembali ke Data UPDL

    </a>

</nav>


<!-- CONTENT -->

<main class="container">


    <div class="card">


        <div class="header">

            <h1>
                Tambah Data UPDL
            </h1>

            <p>
                Tambahkan data Unit Pelaksana Diklat
                ke dalam sistem.
            </p>

        </div>


        <div class="info">

            Data UPDL yang berstatus aktif
            nantinya dapat digunakan pada
            proses Report Mentoring.

        </div>


        <form
            method="POST"
            action="{{ route('master.updl.store') }}">

            @csrf


            <!-- KODE UPDL -->

            <div class="form-group">

                <label>
                    Kode UPDL
                    <span class="required">*</span>
                </label>

                <input
                    type="text"
                    name="kode_updl"
                    value="{{ old('kode_updl') }}"
                    placeholder="Contoh: UPDL01"
                    maxlength="20"
                    required
                >

                @error('kode_updl')

                    <div class="error">
                        {{ $message }}
                    </div>

                @enderror

            </div>


            <!-- NAMA UPDL -->

            <div class="form-group">

                <label>
                    Nama UPDL
                    <span class="required">*</span>
                </label>

                <input
                    type="text"
                    name="nama_updl"
                    value="{{ old('nama_updl') }}"
                    placeholder="Masukkan nama UPDL"
                    maxlength="150"
                    required
                >

                @error('nama_updl')

                    <div class="error">
                        {{ $message }}
                    </div>

                @enderror

            </div>


            <!-- KETERANGAN -->

            <div class="form-group">

                <label>
                    Keterangan
                </label>

                <textarea
                    name="keterangan"
                    placeholder="Masukkan keterangan UPDL (opsional)"
                >{{ old('keterangan') }}</textarea>

                @error('keterangan')

                    <div class="error">
                        {{ $message }}
                    </div>

                @enderror

            </div>


            <!-- BUTTON -->

            <div class="buttons">

                <button
                    type="submit"
                    class="btn btn-primary">

                    Simpan Data

                </button>


                <a
                    href="{{ route('master.updl.index') }}"
                    class="btn btn-secondary">

                    Batal

                </a>

            </div>


        </form>


    </div>


</main>


</body>

</html>