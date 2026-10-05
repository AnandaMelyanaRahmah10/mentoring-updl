<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Data UPDL - Mentoring Report PLN</title>

    <style>

        /* =========================
           RESET
        ========================= */

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family:
                Inter,
                "Segoe UI",
                Arial,
                Helvetica,
                sans-serif;

            background: #f4f7fb;
            color: #172554;
            min-height: 100vh;
        }


        /* =========================
           NAVBAR
        ========================= */

        .navbar {
            height: 72px;

            background: rgba(255, 255, 255, 0.96);

            border-bottom: 1px solid #e5eaf2;

            display: flex;
            align-items: center;
            justify-content: space-between;

            padding: 0 42px;

            position: sticky;
            top: 0;

            z-index: 100;

            box-shadow:
                0 2px 10px rgba(15, 23, 42, 0.03);
        }


        .brand {
            display: flex;
            align-items: center;
            gap: 12px;

            font-size: 21px;
            font-weight: 700;

            color: #172554;
        }


        .brand-icon {
            width: 38px;
            height: 38px;

            border-radius: 10px;

            background: linear-gradient(
                135deg,
                #2563eb,
                #3b82f6
            );

            display: flex;
            align-items: center;
            justify-content: center;

            color: white;

            font-size: 19px;
            font-weight: bold;

            box-shadow:
                0 5px 12px rgba(37, 99, 235, 0.25);
        }


        .brand span {
            color: #2563eb;
        }


        .back {
            display: inline-flex;
            align-items: center;
            gap: 8px;

            text-decoration: none;

            color: #2563eb;

            font-size: 14px;
            font-weight: 600;

            padding: 9px 12px;

            border-radius: 8px;

            transition: 0.2s;
        }


        .back:hover {
            background: #eff6ff;
            color: #1d4ed8;
        }


        /* =========================
           CONTAINER
        ========================= */

        .container {
            width: 100%;
            max-width: 1450px;

            margin: 0 auto;

            padding: 38px 35px 50px;
        }


        /* =========================
           MAIN CARD
        ========================= */

        .content-card {
            background: white;

            border: 1px solid #e5eaf2;

            border-radius: 16px;

            padding: 30px;

            box-shadow:
                0 10px 30px rgba(15, 23, 42, 0.05);
        }


        /* =========================
           HEADER
        ========================= */

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;

            gap: 25px;

            margin-bottom: 28px;
        }


        .header-left {
            display: flex;
            align-items: center;
            gap: 16px;
        }


        .header-icon {
            width: 54px;
            height: 54px;

            flex-shrink: 0;

            border-radius: 14px;

            background: #eff6ff;

            display: flex;
            align-items: center;
            justify-content: center;

            color: #2563eb;

            font-size: 25px;
        }


        .header h1 {
            font-size: 28px;

            line-height: 1.2;

            margin-bottom: 7px;

            color: #172554;
        }


        .header p {
            color: #64748b;

            font-size: 14px;

            line-height: 1.5;
        }


        /* =========================
           BUTTON
        ========================= */

        .btn {
            display: inline-flex;

            align-items: center;
            justify-content: center;

            gap: 7px;

            padding: 10px 15px;

            border-radius: 8px;

            text-decoration: none;

            border: none;

            cursor: pointer;

            font-family: inherit;

            font-size: 13px;

            font-weight: 600;

            transition:
                transform 0.15s,
                box-shadow 0.15s,
                background 0.15s;
        }


        .btn:hover {
            transform: translateY(-1px);
        }


        .btn-primary {
            background: #2563eb;
            color: white;

            box-shadow:
                0 5px 12px rgba(37, 99, 235, 0.20);
        }


        .btn-primary:hover {
            background: #1d4ed8;
        }


        .btn-warning {
            background: #f59e0b;
            color: white;
        }


        .btn-warning:hover {
            background: #d97706;
        }


        .btn-danger {
            background: #ef4444;
            color: white;
        }


        .btn-danger:hover {
            background: #dc2626;
        }


        /* =========================
           ALERT
        ========================= */

        .alert {
            display: flex;

            align-items: center;

            gap: 12px;

            background: #ecfdf5;

            color: #047857;

            padding: 13px 16px;

            border-radius: 9px;

            margin-bottom: 24px;

            border: 1px solid #a7f3d0;

            font-size: 14px;

            font-weight: 500;
        }


        .alert-icon {
            width: 28px;
            height: 28px;

            border-radius: 50%;

            background: #10b981;

            color: white;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 14px;

            font-weight: bold;
        }


        /* =========================
           TABLE WRAPPER
        ========================= */

        .table-container {
            width: 100%;

            background: white;

            border: 1px solid #e5eaf2;

            border-radius: 12px;

            overflow-x: auto;
        }


        /* =========================
           TABLE
        ========================= */

        table {
            width: 100%;

            border-collapse: collapse;

            min-width: 850px;
        }


        th {
            background: #f8fafc;

            color: #475569;

            text-align: left;

            padding: 15px 16px;

            border-bottom: 1px solid #e5eaf2;

            font-size: 12px;

            font-weight: 700;

            text-transform: uppercase;

            letter-spacing: 0.3px;
        }


        td {
            padding: 16px;

            border-bottom: 1px solid #eef2f7;

            font-size: 14px;

            color: #334155;

            vertical-align: middle;
        }


        tbody tr {
            transition: background 0.15s;
        }


        tbody tr:hover {
            background: #f8fbff;
        }


        tbody tr:last-child td {
            border-bottom: none;
        }


        /* =========================
           KODE UPDL
        ========================= */

        .kode {
            font-weight: 700;

            color: #1e3a8a;
        }


        /* =========================
           NAMA UPDL
        ========================= */

        .nama-updl {
            font-weight: 600;

            color: #1e293b;
        }


        /* =========================
           KETERANGAN
        ========================= */

        .keterangan {
            color: #64748b;

            max-width: 320px;

            line-height: 1.5;
        }


        /* =========================
           STATUS
        ========================= */

        .status {
            display: inline-flex;

            align-items: center;

            gap: 6px;

            padding: 6px 11px;

            border-radius: 999px;

            font-size: 12px;

            font-weight: 600;
        }


        .status::before {
            content: "";

            width: 7px;
            height: 7px;

            border-radius: 50%;

            background: currentColor;
        }


        .aktif {
            background: #ecfdf5;

            color: #059669;
        }


        .nonaktif {
            background: #fef2f2;

            color: #dc2626;
        }


        /* =========================
           ACTION
        ========================= */

        .actions {
            display: flex;

            align-items: center;

            gap: 7px;
        }


        .actions form {
            margin: 0;
        }


        .actions .btn {
            min-width: 65px;

            padding: 8px 12px;

            font-size: 12px;
        }


        /* =========================
           EMPTY
        ========================= */

        .empty {
            text-align: center;

            padding: 55px 20px !important;

            color: #64748b;

            font-size: 14px;
        }


        .empty-icon {
            width: 52px;
            height: 52px;

            margin: 0 auto 14px;

            border-radius: 50%;

            background: #f1f5f9;

            color: #64748b;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 22px;
        }


        .empty p {
            margin-bottom: 18px;
        }


        /* =========================
           FOOTER INFO
        ========================= */

        .table-footer {
            display: flex;

            align-items: center;

            justify-content: space-between;

            padding-top: 18px;

            color: #64748b;

            font-size: 13px;
        }


        .total-data {
            font-weight: 500;
        }


        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 900px) {

            .navbar {
                padding: 0 20px;
            }


            .container {
                padding: 25px 18px 40px;
            }


            .content-card {
                padding: 22px;
            }


            .header {
                align-items: flex-start;
            }

        }


        @media (max-width: 650px) {

            .navbar {
                height: auto;

                padding: 15px 18px;

                gap: 12px;

                align-items: flex-start;
            }


            .brand {
                font-size: 17px;
            }


            .brand-icon {
                width: 34px;
                height: 34px;
            }


            .back {
                font-size: 12px;

                padding: 7px;
            }


            .content-card {
                padding: 18px;

                border-radius: 12px;
            }


            .header {
                flex-direction: column;

                width: 100%;

                gap: 18px;
            }


            .header-left {
                width: 100%;
            }


            .header h1 {
                font-size: 24px;
            }


            .header .btn-primary {
                width: 100%;
            }


            .actions {
                flex-direction: column;

                align-items: stretch;
            }


            .actions .btn {
                width: 100%;
            }


            .table-footer {
                flex-direction: column;

                align-items: flex-start;

                gap: 8px;
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

        <div class="brand-icon">
            ⚡
        </div>

        <div>
            Mentoring <span>Report PLN</span>
        </div>

    </div>


    <a
        href="{{ route('master-data.index') }}"
        class="back">

        ← Kembali ke Master Data

    </a>

</nav>



<!-- =========================
     CONTENT
========================= -->

<main class="container">


    <div class="content-card">


        <!-- =========================
             HEADER
        ========================= -->

        <div class="header">


            <div class="header-left">


                <div class="header-icon">
                    🏢
                </div>


                <div>

                    <h1>
                        Data UPDL
                    </h1>

                    <p>
                        Kelola data Unit Pelaksana Diklat
                        untuk kebutuhan mentoring.
                    </p>

                </div>


            </div>


            <!-- CREATE -->

            <a
                href="{{ route('master.updl.create') }}"
                class="btn btn-primary">

                <span>＋</span>

                Tambah UPDL

            </a>


        </div>



        <!-- =========================
             SUCCESS MESSAGE
        ========================= -->

        @if(session('success'))

            <div class="alert">

                <div class="alert-icon">
                    ✓
                </div>

                <div>
                    {{ session('success') }}
                </div>

            </div>

        @endif



        <!-- =========================
             TABLE
        ========================= -->

        <div class="table-container">

            <table>

                <thead>

                    <tr>

                        <th width="65">
                            No
                        </th>

                        <th width="150">
                            Kode UPDL
                        </th>

                        <th>
                            Nama UPDL
                        </th>

                        <th>
                            Keterangan
                        </th>

                        <th width="120">
                            Status
                        </th>

                        <th width="160">
                            Aksi
                        </th>

                    </tr>

                </thead>


                <tbody>


                    @forelse($updls as $updl)


                        <tr>


                            <!-- NO -->

                            <td>
                                {{ $loop->iteration }}
                            </td>


                            <!-- KODE -->

                            <td>

                                <span class="kode">

                                    {{ $updl->kode_updl }}

                                </span>

                            </td>


                            <!-- NAMA -->

                            <td>

                                <span class="nama-updl">

                                    {{ $updl->nama_updl }}

                                </span>

                            </td>


                            <!-- KETERANGAN -->

                            <td>

                                <span class="keterangan">

                                    {{ $updl->keterangan ?? '-' }}

                                </span>

                            </td>


                            <!-- STATUS -->

                            <td>

                                <span
                                    class="status {{ $updl->status }}">

                                    {{ ucfirst($updl->status) }}

                                </span>

                            </td>


                            <!-- AKSI -->

                            <td>

                                <div class="actions">


                                    <!-- EDIT -->

                                    <a
                                        href="{{ route('master.updl.edit', $updl->id) }}"
                                        class="btn btn-warning">

                                        ✎ Edit

                                    </a>


                                    <!-- HAPUS -->

                                    <form
                                        method="POST"
                                        action="{{ route('master.updl.destroy', $updl->id) }}">

                                        @csrf

                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="btn btn-danger"
                                            onclick="return confirm('Yakin ingin menghapus data UPDL ini?')">

                                            🗑 Hapus

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


                                <div class="empty-icon">
                                    📭
                                </div>


                                <p>
                                    Belum ada data UPDL.
                                </p>


                                <a
                                    href="{{ route('master.updl.create') }}"
                                    class="btn btn-primary">

                                    ＋ Tambah UPDL

                                </a>


                            </td>

                        </tr>


                    @endforelse


                </tbody>

            </table>

        </div>



        <!-- =========================
             TABLE FOOTER
        ========================= -->

        @if($updls->count() > 0)

            <div class="table-footer">

                <div class="total-data">

                    Menampilkan
                    <strong>{{ $updls->count() }}</strong>
                    data UPDL

                </div>

            </div>

        @endif


    </div>


</main>


</body>

</html>