<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>
        Data Periode - Mentoring Report PLN
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

        .back {

            color: #2563eb;

            text-decoration: none;

            font-size: 14px;
        }

        .container {

            padding: 35px;
        }

        .header {

            display: flex;

            justify-content: space-between;

            align-items: center;

            margin-bottom: 25px;
        }

        .header h1 {

            margin:
                0 0 8px;

            font-size: 28px;
        }

        .header p {

            margin: 0;

            color: #6b7280;
        }

        .btn {

            display: inline-block;

            padding:
                9px 14px;

            border-radius: 7px;

            border: none;

            cursor: pointer;

            text-decoration: none;

            font-size: 13px;
        }

        .btn-primary {

            background: #2563eb;

            color: white;
        }

        .btn-warning {

            background: #f59e0b;

            color: white;
        }

        .btn-danger {

            background: #dc2626;

            color: white;
        }

        .alert {

            background: #dcfce7;

            color: #166534;

            padding: 12px 15px;

            border-radius: 7px;

            margin-bottom: 20px;
        }

        .table-container {

            background: white;

            border:
                1px solid #e5e7eb;

            border-radius: 10px;

            overflow-x: auto;
        }

        table {

            width: 100%;

            border-collapse: collapse;
        }

        th {

            background: #f8fafc;

            padding: 13px;

            text-align: left;

            font-size: 13px;

            border-bottom:
                1px solid #e5e7eb;
        }

        td {

            padding: 13px;

            border-bottom:
                1px solid #e5e7eb;

            font-size: 13px;
        }

        .status {

            display: inline-block;

            padding: 5px 9px;

            border-radius: 15px;

            font-size: 11px;
        }

        .aktif {

            background: #dcfce7;

            color: #166534;
        }

        .nonaktif {

            background: #fee2e2;

            color: #991b1b;
        }

        .actions {

            display: flex;

            gap: 6px;
        }

        .actions form {

            margin: 0;
        }

        .empty {

            text-align: center;

            padding: 40px;

            color: #6b7280;
        }

    </style>

</head>

<body>


<nav class="navbar">

    <div class="brand">

        Mentoring
        <span>Report PLN</span>

    </div>


    <a
        href="{{ route('master-data.index') }}"
        class="back">

        ← Kembali ke Master Data

    </a>

</nav>


<main class="container">


    <div class="header">

        <div>

            <h1>
                Data Periode
            </h1>

            <p>
                Kelola periode mentoring
                berdasarkan bulan dan tahun.
            </p>

        </div>


        <a
            href="{{ route('master.periode.create') }}"
            class="btn btn-primary">

            + Tambah Periode

        </a>

    </div>


    @if(session('success'))

        <div class="alert">

            {{ session('success') }}

        </div>

    @endif


    <div class="table-container">

        <table>

            <thead>

                <tr>

                    <th>No</th>

                    <th>Periode</th>

                    <th>Bulan</th>

                    <th>Tahun</th>

                    <th>Status</th>

                    <th>Aksi</th>

                </tr>

            </thead>


            <tbody>

                @forelse($periodes as $periode)

                    <tr>

                        <td>

                            {{ $loop->iteration }}

                        </td>

                        <td>

                            <strong>

                                {{ $periode->nama_periode }}

                            </strong>

                        </td>

                        <td>

                            {{ $periode->bulan }}

                        </td>

                        <td>

                            {{ $periode->tahun }}

                        </td>

                        <td>

                            <span
                                class="status
                                {{ $periode->status }}">

                                {{ ucfirst($periode->status) }}

                            </span>

                        </td>

                        <td>

                            <div class="actions">

                                <a
                                    href="{{ route(
                                        'master.periode.edit',
                                        $periode->id
                                    ) }}"
                                    class="btn btn-warning">

                                    Edit

                                </a>


                                <form
                                    method="POST"
                                    action="{{ route(
                                        'master.periode.destroy',
                                        $periode->id
                                    ) }}">

                                    @csrf

                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="btn btn-danger"
                                        onclick="
                                            return confirm(
                                                'Yakin ingin menghapus periode ini?'
                                            )
                                        ">

                                        Hapus

                                    </button>

                                </form>

                            </div>

                        </td>

                    </tr>

                @empty

                    <tr>

                        <td
                            colspan="6"
                            class="empty">

                            Belum ada
                            data periode.

                        </td>

                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>


</main>

</body>

</html>