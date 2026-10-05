<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Tambah Kriteria - Mentoring Report PLN</title>

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f7fb;
        }

        .container {
            max-width: 850px;
            margin: 40px auto;
            padding: 20px;
        }

        .card {
            background: white;
            padding: 30px;
            border-radius: 12px;
            border: 1px solid #e5e7eb;
        }

        h1 {
            margin-top: 0;
        }

        .subtitle {
            color: #6b7280;
            margin-bottom: 25px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 8px;
        }

        input,
        select,
        textarea {
            width: 100%;
            padding: 11px;

            border: 1px solid #d1d5db;

            border-radius: 7px;

            font-family: inherit;

            font-size: 14px;
        }

        textarea {
            min-height: 120px;
            resize: vertical;
        }

        .error {
            color: #dc2626;
            font-size: 12px;
            margin-top: 5px;
        }

        .buttons {
            display: flex;
            gap: 10px;
        }

        .btn {
            padding: 11px 18px;
            border: none;
            border-radius: 7px;
            cursor: pointer;
            text-decoration: none;
            font-size: 14px;
        }

        .btn-primary {
            background: #2563eb;
            color: white;
        }

        .btn-secondary {
            background: #e5e7eb;
            color: #374151;
        }

    </style>

</head>

<body>


<div class="container">

    <div class="card">

        <h1>
            Tambah Kriteria Penilaian
        </h1>

        <p class="subtitle">
            Tambahkan point penilaian mentoring.
        </p>


        <form
            method="POST"
            action="{{ route('master.kriteria.store') }}">

            @csrf


            <div class="form-group">

                <label>
                    Nomor Point *
                </label>

                <input
                    type="number"
                    name="nomor_point"
                    min="1"
                    max="30"
                    value="{{ old('nomor_point') }}"
                    required
                >

                @error('nomor_point')
                    <div class="error">
                        {{ $message }}
                    </div>
                @enderror

            </div>


            <div class="form-group">

                <label>
                    Kode Kriteria *
                </label>

                <input
                    type="text"
                    name="kode_kriteria"
                    maxlength="30"
                    value="{{ old('kode_kriteria') }}"
                    placeholder="Contoh: PLAN-01"
                    required
                >

                @error('kode_kriteria')
                    <div class="error">
                        {{ $message }}
                    </div>
                @enderror

            </div>


            <div class="form-group">

                <label>
                    Kelompok *
                </label>

                <select name="kelompok" required>

                    <option value="">
                        -- Pilih Retensi: --
                    </option>

                    <option value="PLAN"
                        {{ old('kelompok') == 'PLAN' ? 'selected' : '' }}>
                        PLAN
                    </option>

                    <option value="DO"
                        {{ old('kelompok') == 'DO' ? 'selected' : '' }}>
                        DO
                    </option>

                    <option value="CHECK"
                        {{ old('kelompok') == 'CHECK' ? 'selected' : '' }}>
                        CHECK
                    </option>

                    <option value="ACT"
                        {{ old('kelompok') == 'ACT' ? 'selected' : '' }}>
                        ACT
                    </option>

                </select>

            </div>


            <div class="form-group">

                <label>
                    Kriteria Penilaian *
                </label>

                <textarea
                    name="kriteria"
                    placeholder="Masukkan pertanyaan atau kriteria penilaian..."
                    required
                >{{ old('kriteria') }}</textarea>

                @error('kriteria')
                    <div class="error">
                        {{ $message }}
                    </div>
                @enderror

            </div>


            <div class="form-group">

                <label>
                    Kebutuhan Eviden
                </label>

                <textarea
                    name="kebutuhan_eviden"
                    placeholder="Masukkan bukti/eviden yang diperlukan..."
                >{{ old('kebutuhan_eviden') }}</textarea>

            </div>


            <div class="form-group">

                <label>
                    Bobot (%)
                </label>

                <input
                    type="number"
                    name="bobot"
                    step="0.01"
                    min="0"
                    max="100"
                    value="{{ old('bobot', 0) }}"
                    required
                >

            </div>


            <div class="form-group">

                <label>
                    Status
                </label>

                <select name="status">

                    <option value="aktif"
                        {{ old('status', 'aktif') == 'aktif' ? 'selected' : '' }}>

                        Aktif

                    </option>

                    <option value="nonaktif"
                        {{ old('status') == 'nonaktif' ? 'selected' : '' }}>

                        Nonaktif

                    </option>

                </select>

            </div>


            <div class="buttons">

                <button
                    type="submit"
                    class="btn btn-primary">

                    Simpan

                </button>

                <a
                    href="{{ route('master.kriteria.index') }}"
                    class="btn btn-secondary">

                    Batal

                </a>

            </div>


        </form>

    </div>

</div>

</body>

</html>