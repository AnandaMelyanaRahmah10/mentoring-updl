<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard - Mentoring Report UPDL</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>

        :root {
            --primary: #2563eb;
            --primary-hover: #1d4ed8;
            --primary-light: #eff6ff;

            --bg-body: #f8fafc;
            --surface: #ffffff;

            --text-main: #0f172a;
            --text-muted: #64748b;

            --border-color: #e2e8f0;

            --success: #10b981;
            --success-bg: #ecfdf5;

            --warning: #f59e0b;
            --warning-bg: #fffbeb;

            --danger: #ef4444;
            --danger-bg: #fef2f2;

            --radius-md: 10px;
            --radius-lg: 16px;

            --shadow-sm:
                0 1px 3px rgba(0, 0, 0, 0.05);

            --shadow-md:
                0 4px 6px -1px rgba(0, 0, 0, 0.05),
                0 2px 4px -2px rgba(0, 0, 0, 0.05);

            --shadow-hover:
                0 12px 20px -3px rgba(0, 0, 0, 0.08);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Inter',
                -apple-system,
                BlinkMacSystemFont,
                sans-serif;

            background: var(--bg-body);
            color: var(--text-main);

            line-height: 1.5;

            -webkit-font-smoothing: antialiased;
        }


        /* =====================================================
           NAVBAR
        ===================================================== */

        .navbar {
            height: 72px;

            background: var(--surface);

            border-bottom: 1px solid var(--border-color);

            display: flex;
            align-items: center;
            justify-content: space-between;

            padding: 0 32px;

            position: sticky;
            top: 0;

            z-index: 50;

            box-shadow: var(--shadow-sm);
        }

        .brand {
            font-size: 20px;
            font-weight: 700;

            color: var(--text-main);

            display: flex;
            align-items: center;

            gap: 10px;
        }

        .brand-logo {
            width: 32px;
            height: 32px;

            background: var(--primary);

            border-radius: 8px;

            display: flex;
            align-items: center;
            justify-content: center;

            color: white;
        }

        .brand span {
            color: var(--primary);
        }

        .user-area {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .user-info {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
        }

        .user-name {
            font-size: 14px;
            font-weight: 600;
        }

        .user-role {
            font-size: 12px;
            color: var(--text-muted);
        }

        .logout-btn {
            border: 1px solid #fee2e2;

            background: #fef2f2;

            color: var(--danger);

            padding: 8px 16px;

            border-radius: var(--radius-md);

            cursor: pointer;

            font-size: 13px;
            font-weight: 600;

            transition: all .2s ease;
        }

        .logout-btn:hover {
            background: var(--danger);
            color: white;
            border-color: var(--danger);
        }


        /* =====================================================
           CONTAINER
        ===================================================== */

        .container {
            max-width: 1440px;

            margin: auto;

            padding: 36px 32px 20px;
        }


        /* =====================================================
           WELCOME
        ===================================================== */

        .welcome {
            margin-bottom: 28px;

            display: flex;
            justify-content: space-between;
            align-items: flex-end;
        }

        .welcome h1 {
            font-size: 26px;
            font-weight: 700;
        }

        .welcome p {
            color: var(--text-muted);

            font-size: 14px;

            margin-top: 4px;
        }

        .badge-live {
            display: inline-flex;

            align-items: center;

            gap: 7px;

            background: #f0fdf4;

            color: #166534;

            border: 1px solid #bbf7d0;

            padding: 6px 13px;

            border-radius: 20px;

            font-size: 12px;

            font-weight: 600;
        }

        .pulse {
            width: 8px;
            height: 8px;

            background: var(--success);

            border-radius: 50%;

            animation: pulse 1.6s infinite;
        }

        @keyframes pulse {

            0% {
                transform: scale(.95);
                box-shadow: 0 0 0 0 rgba(16, 185, 129, .7);
            }

            70% {
                transform: scale(1);
                box-shadow: 0 0 0 6px rgba(16, 185, 129, 0);
            }

            100% {
                transform: scale(.95);
                box-shadow: 0 0 0 0 rgba(16, 185, 129, 0);
            }
        }


        /* =====================================================
           STATISTICS
        ===================================================== */

        .stats {
            display: grid;

            grid-template-columns: repeat(4, 1fr);

            gap: 18px;

            margin-bottom: 30px;
        }

        .stat-card {
            background: var(--surface);

            border: 1px solid var(--border-color);

            border-radius: var(--radius-lg);

            padding: 22px;

            min-height: 128px;

            display: flex;

            justify-content: space-between;

            align-items: flex-start;

            box-shadow: var(--shadow-sm);

            transition: all .2s ease;
        }

        .stat-card:hover {
            transform: translateY(-2px);

            box-shadow: var(--shadow-md);
        }

        .stat-title {
            font-size: 13px;

            color: var(--text-muted);

            margin-bottom: 8px;
        }

        .stat-value {
            font-size: 30px;

            font-weight: 700;

            line-height: 1;
        }

        .stat-description {
            font-size: 12px;

            color: var(--text-muted);

            margin-top: 8px;
        }

        .stat-icon {
            width: 48px;
            height: 48px;

            border-radius: var(--radius-md);

            background: var(--primary-light);

            color: var(--primary);

            display: flex;

            align-items: center;
            justify-content: center;
        }


        /* =====================================================
           MAIN GRID
        ===================================================== */

        .main-grid {
            display: grid;

            grid-template-columns: 2fr 1fr;

            gap: 24px;

            margin-bottom: 32px;
        }

        .panel {
            background: var(--surface);

            border: 1px solid var(--border-color);

            border-radius: var(--radius-lg);

            padding: 24px;

            box-shadow: var(--shadow-sm);
        }


        /* =====================================================
           GRAFIK
        ===================================================== */

        .chart-panel {
            min-height: 410px;
        }

        .chart-header {
            display: flex;

            justify-content: space-between;

            align-items: flex-start;

            margin-bottom: 25px;
        }

        .chart-title h2 {
            font-size: 18px;

            font-weight: 700;
        }

        .chart-title p {
            font-size: 13px;

            color: var(--text-muted);

            margin-top: 4px;
        }

        .period {
            padding: 9px 13px;

            border: 1px solid var(--border-color);

            border-radius: 9px;

            font-size: 12px;

            font-weight: 600;

            color: var(--text-main);

            background: white;

            cursor: pointer;

            outline: none;
        }

        .period:hover {
            border-color: var(--primary);
        }

        .chart-area {
            position: relative;

            height: 270px;

            margin-top: 10px;
        }

        .chart-grid {
            position: absolute;

            left: 45px;
            right: 10px;

            top: 10px;
            bottom: 45px;

            display: flex;

            flex-direction: column;

            justify-content: space-between;
        }

        .chart-grid-line {
            width: 100%;

            border-top: 1px dashed #e2e8f0;

            position: relative;
        }

        .chart-grid-line span {
            position: absolute;

            left: -40px;

            top: -8px;

            font-size: 10px;

            color: #94a3b8;

            font-weight: 500;
        }

        .chart-bars {
            position: absolute;

            left: 45px;
            right: 10px;

            top: 10px;
            bottom: 45px;

            display: flex;

            align-items: flex-end;

            justify-content: space-around;

            gap: 20px;
        }

        .bar-group {
            height: 100%;

            flex: 1;

            max-width: 80px;

            display: flex;

            flex-direction: column;

            align-items: center;

            justify-content: flex-end;
        }

        .bar-value {
            font-size: 12px;

            font-weight: 700;

            color: var(--text-main);

            margin-bottom: 7px;

            opacity: 0;

            transform: translateY(5px);

            transition: all .25s ease;
        }

        .bar-wrapper {
            width: 34px;

            height: calc(100% - 25px);

            background: #f1f5f9;

            border-radius: 8px 8px 4px 4px;

            display: flex;

            align-items: flex-end;

            overflow: hidden;

            cursor: pointer;

            transition: all .25s ease;
        }

        .bar-wrapper:hover {
            transform: translateY(-3px);

            box-shadow: 0 8px 18px rgba(37, 99, 235, .12);
        }

        .bar-fill {
            width: 100%;

            border-radius: 8px 8px 4px 4px;

            transition: height .5s ease;
        }

        .bar-fill.good {
            background:
                linear-gradient(
                    180deg,
                    #60a5fa,
                    #2563eb
                );
        }

        .bar-fill.medium {
            background:
                linear-gradient(
                    180deg,
                    #fbbf24,
                    #f59e0b
                );
        }

        .bar-fill.bad {
            background:
                linear-gradient(
                    180deg,
                    #fb7185,
                    #ef4444
                );
        }

        .bar-wrapper:hover .bar-fill {
            filter: brightness(1.08);
        }

        .bar-label {
            margin-top: 10px;

            font-size: 11px;

            font-weight: 600;

            color: #64748b;

            white-space: nowrap;
        }

        .bar-group:hover .bar-value {
            opacity: 1;

            transform: translateY(0);
        }

        .chart-legend {
            display: flex;

            justify-content: center;

            gap: 22px;

            margin-top: 5px;

            padding-top: 15px;

            border-top: 1px solid #f1f5f9;
        }

        .legend-item {
            display: flex;

            align-items: center;

            gap: 7px;

            font-size: 11px;

            color: var(--text-muted);
        }

        .legend-dot {
            width: 9px;
            height: 9px;

            border-radius: 50%;
        }

        .legend-good {
            background: #2563eb;
        }

        .legend-medium {
            background: #f59e0b;
        }

        .legend-bad {
            background: #ef4444;
        }


        /* =====================================================
           STATUS
        ===================================================== */

        .panel-header {
            margin-bottom: 24px;
        }

        .panel-header h2 {
            font-size: 18px;

            font-weight: 700;
        }

        .panel-header p {
            font-size: 13px;

            color: var(--text-muted);

            margin-top: 3px;
        }

        .status-list {
            display: flex;

            flex-direction: column;

            gap: 16px;
        }

        .status-item {
            display: flex;

            align-items: center;

            gap: 14px;

            padding: 16px;

            border-radius: var(--radius-md);

            background: #f8fafc;

            border: 1px solid #f1f5f9;
        }

        .status-icon {
            width: 36px;
            height: 36px;

            border-radius: 50%;

            display: flex;

            align-items: center;

            justify-content: center;

            font-weight: 700;
        }

        .status-green {
            background: var(--success-bg);

            color: var(--success);
        }

        .status-yellow {
            background: var(--warning-bg);

            color: var(--warning);
        }

        .status-red {
            background: var(--danger-bg);

            color: var(--danger);
        }

        .status-text strong {
            display: block;

            font-size: 14px;
        }

        .status-text small {
            display: block;

            margin-top: 2px;

            font-size: 12px;

            color: var(--text-muted);
        }


        /* =====================================================
           MENU
        ===================================================== */

        .menu-title {
            margin-bottom: 20px;
        }

        .menu-title h2 {
            font-size: 18px;
        }

        .menu-title p {
            font-size: 13px;

            color: var(--text-muted);

            margin-top: 3px;
        }

        .menu {
            display: grid;

            grid-template-columns: repeat(3, 1fr);

            gap: 20px;
        }

        .menu-card {
            background: var(--surface);

            border: 1px solid var(--border-color);

            border-radius: var(--radius-lg);

            padding: 22px;

            min-height: 205px;

            text-decoration: none;

            color: inherit;

            box-shadow: var(--shadow-sm);

            transition: all .25s ease;

            display: flex;

            flex-direction: column;

            justify-content: space-between;
        }

        .menu-card:hover {
            transform: translateY(-4px);

            box-shadow: var(--shadow-hover);

            border-color: #cbd5e1;
        }

        .menu-icon {
            width: 48px;
            height: 48px;

            border-radius: var(--radius-md);

            background: var(--primary-light);

            color: var(--primary);

            display: flex;

            align-items: center;

            justify-content: center;

            margin-bottom: 20px;

            font-size: 21px;
        }

        .menu-card h3 {
            font-size: 16px;

            margin-bottom: 6px;
        }

        .menu-card p {
            font-size: 13px;

            color: var(--text-muted);

            margin-bottom: 20px;

            line-height: 1.5;
        }

        .menu-link {
            font-size: 13px;

            color: var(--primary);

            font-weight: 600;
        }


        /* =====================================================
           FOOTER
        ===================================================== */

        .footer {
            text-align: center;

            padding: 32px 0 16px;

            color: var(--text-muted);

            font-size: 12px;

            border-top: 1px solid var(--border-color);

            margin-top: 40px;
        }


        /* =====================================================
           RESPONSIVE
        ===================================================== */

        @media(max-width:1024px) {

            .stats {
                grid-template-columns: repeat(2, 1fr);
            }

            .main-grid {
                grid-template-columns: 1fr;
            }

        }


        @media(max-width:640px) {

            .navbar {
                padding: 0 16px;
            }

            .container {
                padding: 20px 16px;
            }

            .welcome {
                flex-direction: column;

                align-items: flex-start;

                gap: 12px;
            }

            .stats {
                grid-template-columns: 1fr;
            }

            .menu {
                grid-template-columns: 1fr;
            }

            .user-info {
                display: none;
            }

            .chart-header {
                flex-direction: column;

                gap: 12px;
            }

            .chart-bars {
                gap: 8px;
            }

            .bar-wrapper {
                width: 24px;
            }

            .bar-label {
                font-size: 9px;
            }

            .chart-legend {
                gap: 10px;

                flex-wrap: wrap;
            }

        }

    </style>

</head>


<body>


<!-- =====================================================
     NAVBAR
===================================================== -->

<nav class="navbar">

    <div class="brand">

        <div class="brand-logo">

            <svg
                width="20"
                height="20"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2.5">

                <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>

            </svg>

        </div>

        Mentoring

        <span>
            Report UPDL
        </span>

    </div>


    <div class="user-area">

        <div class="user-info">

            <div class="user-name">

                {{ auth()->user()->name ?? 'Administrator Pusdiklat' }}

            </div>

            <div class="user-role">

                Administrator

            </div>

        </div>


        <form
            method="POST"
            action="{{ route('logout') }}">

            @csrf

            <button
                type="submit"
                class="logout-btn">

                Logout

            </button>

        </form>

    </div>

</nav>



<!-- =====================================================
     CONTENT
===================================================== -->

<main class="container">


    <!-- WELCOME -->

    <div class="welcome">

        <div>

            <h1>
                Dashboard Overview
            </h1>

            <p>
                Monitoring Mentoring PLN Pusdiklat Terpadu
            </p>

        </div>


        <div class="badge-live">

            <span class="pulse"></span>

            Sistem Aktif

        </div>

    </div>



    <!-- =================================================
         STATISTIK
    ================================================= -->

    <section class="stats">


        <!-- TOTAL UPDL -->

        <div class="stat-card">

            <div>

                <div class="stat-title">
                    Total UPDL
                </div>

                <div
                    class="stat-value"
                    id="totalUpdl">

                    0

                </div>

                <div class="stat-description">
                    UPDL Terdaftar
                </div>

            </div>


            <div class="stat-icon">

                <svg
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2">

                    <rect
                        x="4"
                        y="2"
                        width="16"
                        height="20"
                        rx="2"/>

                    <line
                        x1="9"
                        y1="6"
                        x2="15"
                        y2="6"/>

                    <line
                        x1="9"
                        y1="10"
                        x2="15"
                        y2="10"/>

                    <line
                        x1="9"
                        y1="14"
                        x2="15"
                        y2="14"/>

                    <line
                        x1="9"
                        y1="18"
                        x2="15"
                        y2="18"/>

                </svg>

            </div>

        </div>



        <!-- TOTAL KRITERIA -->

        <div class="stat-card">

            <div>

                <div class="stat-title">
                    Kriteria Penilaian
                </div>

                <div
                    class="stat-value"
                    id="totalKriteria">

                    0

                </div>

                <div class="stat-description">
                    Kriteria Mentoring
                </div>

            </div>


            <div class="stat-icon">

                <svg
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2">

                    <path d="M9 11l3 3L22 4"/>

                    <path
                        d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/>

                </svg>

            </div>

        </div>



        <!-- REPORT -->

        <div class="stat-card">

            <div>

                <div class="stat-title">
                    Report Bulan Ini
                </div>

                <div
                    class="stat-value"
                    id="totalReport">

                    0

                </div>

                <div class="stat-description">
                    Report Dibuat
                </div>

            </div>


            <div class="stat-icon">

                <svg
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2">

                    <path
                        d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>

                    <polyline
                        points="14 2 14 8 20 8"/>

                    <line
                        x1="16"
                        y1="13"
                        x2="8"
                        y2="13"/>

                    <line
                        x1="16"
                        y1="17"
                        x2="8"
                        y2="17"/>

                </svg>

            </div>

        </div>



        <!-- RATA RATA -->

        <div class="stat-card">

            <div>

                <div class="stat-title">
                    Rata-rata UPDL
                </div>

                <div class="stat-value">
                    82%
                </div>

                <div class="stat-description">
                    Hasil Mentoring
                </div>

            </div>


            <div class="stat-icon">

                <svg
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2">

                    <polyline
                        points="23 6 13.5 15.5 8.5 10.5 1 18"/>

                    <polyline
                        points="17 6 23 6 23 12"/>

                </svg>

            </div>

        </div>

    </section>



    <!-- =================================================
         MAIN GRID
    ================================================= -->

    <div class="main-grid">


        <!-- =================================================
             GRAFIK
        ================================================= -->

        <section class="panel chart-panel">


            <div class="chart-header">

                <div class="chart-title">

                    <h2>
                        Grafik Penilaian UPDL
                    </h2>

                    <p>
                        Persentase hasil mentoring setiap UPDL
                    </p>

                </div>


                <select class="period">

                    <option>
                        September 2026
                    </option>

                    <option>
                        Agustus 2026
                    </option>

                    <option>
                        Juli 2026
                    </option>

                </select>

            </div>



            <div class="chart-area">


                <!-- GRID -->

                <div class="chart-grid">

                    <div class="chart-grid-line">
                        <span>100%</span>
                    </div>

                    <div class="chart-grid-line">
                        <span>75%</span>
                    </div>

                    <div class="chart-grid-line">
                        <span>50%</span>
                    </div>

                    <div class="chart-grid-line">
                        <span>25%</span>
                    </div>

                    <div class="chart-grid-line">
                        <span>0%</span>
                    </div>

                </div>



                <!-- BARS -->

                <div class="chart-bars">


                    <!-- UPDL 1 -->

                    <div class="bar-group">

                        <div class="bar-value">
                            92%
                        </div>

                        <div class="bar-wrapper">

                            <div
                                class="bar-fill good"
                                style="height:92%;">

                            </div>

                        </div>

                        <span class="bar-label">
                            UPDL 1
                        </span>

                    </div>



                    <!-- UPDL 2 -->

                    <div class="bar-group">

                        <div class="bar-value">
                            87%
                        </div>

                        <div class="bar-wrapper">

                            <div
                                class="bar-fill good"
                                style="height:87%;">

                            </div>

                        </div>

                        <span class="bar-label">
                            UPDL 2
                        </span>

                    </div>



                    <!-- UPDL 3 -->

                    <div class="bar-group">

                        <div class="bar-value">
                            82%
                        </div>

                        <div class="bar-wrapper">

                            <div
                                class="bar-fill good"
                                style="height:82%;">

                            </div>

                        </div>

                        <span class="bar-label">
                            UPDL 3
                        </span>

                    </div>



                    <!-- UPDL 4 -->

                    <div class="bar-group">

                        <div class="bar-value">
                            76%
                        </div>

                        <div class="bar-wrapper">

                            <div
                                class="bar-fill medium"
                                style="height:76%;">

                            </div>

                        </div>

                        <span class="bar-label">
                            UPDL 4
                        </span>

                    </div>



                    <!-- UPDL 5 -->

                    <div class="bar-group">

                        <div class="bar-value">
                            68%
                        </div>

                        <div class="bar-wrapper">

                            <div
                                class="bar-fill medium"
                                style="height:68%;">

                            </div>

                        </div>

                        <span class="bar-label">
                            UPDL 5
                        </span>

                    </div>



                    <!-- UPDL 6 -->

                    <div class="bar-group">

                        <div class="bar-value">
                            59%
                        </div>

                        <div class="bar-wrapper">

                            <div
                                class="bar-fill bad"
                                style="height:59%;">

                            </div>

                        </div>

                        <span class="bar-label">
                            UPDL 6
                        </span>

                    </div>


                </div>

            </div>



            <!-- LEGEND -->

            <div class="chart-legend">

                <div class="legend-item">

                    <span class="legend-dot legend-good"></span>

                    <span>
                        Baik ≥ 80%
                    </span>

                </div>


                <div class="legend-item">

                    <span class="legend-dot legend-medium"></span>

                    <span>
                        Cukup 60–79%
                    </span>

                </div>


                <div class="legend-item">

                    <span class="legend-dot legend-bad"></span>

                    <span>
                        Perlu Perbaikan &lt; 60%
                    </span>

                </div>

            </div>

        </section>



        <!-- =================================================
             STATUS
        ================================================= -->

        <section class="panel">


            <div class="panel-header">

                <h2>
                    Kondisi UPDL
                </h2>

                <p>
                    Berdasarkan hasil penilaian
                </p>

            </div>


            <div class="status-list">


                <!-- BAIK -->

                <div class="status-item">

                    <div class="status-icon status-green">
                        ✓
                    </div>

                    <div class="status-text">

                        <strong>
                            Baik
                        </strong>

                        <small>
                            ≥ 80% — 3 UPDL
                        </small>

                    </div>

                </div>



                <!-- CUKUP -->

                <div class="status-item">

                    <div class="status-icon status-yellow">
                        !
                    </div>

                    <div class="status-text">

                        <strong>
                            Cukup
                        </strong>

                        <small>
                            60% – 79% — 2 UPDL
                        </small>

                    </div>

                </div>



                <!-- PERBAIKAN -->

                <div class="status-item">

                    <div class="status-icon status-red">
                        ×
                    </div>

                    <div class="status-text">

                        <strong>
                            Perlu Perbaikan
                        </strong>

                        <small>
                            &lt; 60% — 1 UPDL
                        </small>

                    </div>

                </div>


            </div>

        </section>

    </div>



    <!-- =================================================
         MENU SISTEM
    ================================================= -->

    <section>


        <div class="menu-title">

            <h2>
                Menu Sistem
            </h2>

            <p>
                Kelola data dan proses mentoring
            </p>

        </div>



        <div class="menu">


            <!-- MASTER DATA -->

            <a
                href="{{ route('master-data.index') }}"
                class="menu-card">

                <div>

                    <div class="menu-icon">
                        ⚙
                    </div>

                    <h3>
                        Master Data
                    </h3>

                    <p>
                        Kelola data UPDL, periode,
                        dan kriteria penilaian mentoring.
                    </p>

                </div>


                <span class="menu-link">
                    Kelola Master Data →
                </span>

            </a>



            <!-- REPORT -->

            <a
                href="{{ route('report-mentoring.index') }}"
                class="menu-card">

                <div>

                    <div class="menu-icon">
                        ✎
                    </div>

                    <h3>
                        Report Mentoring
                    </h3>

                    <p>
                        Input K/I, eviden,
                        serta catatan evaluasi.
                    </p>

                </div>


                <span class="menu-link">
                    Input Report →
                </span>

            </a>



            <!-- LAPORAN -->

            <a
                href="#"
                class="menu-card">

                <div>

                    <div class="menu-icon">
                        📄
                    </div>

                    <h3>
                        Laporan
                    </h3>

                    <p>
                        Tampilkan laporan
                        berdasarkan UPDL dan periode.
                    </p>

                </div>


                <span class="menu-link">
                    Lihat Laporan →
                </span>

            </a>


        </div>

    </section>



    <!-- FOOTER -->

    <footer class="footer">

        Sistem Internal Mentoring Report UPDL Pusdiklat
        &copy; 2026

    </footer>


</main>



<!-- =====================================================
     JAVASCRIPT REAL-TIME
===================================================== -->

<script>


    /* =====================================================
       TOTAL UPDL
    ===================================================== */

    function updateTotalUpdl() {

        fetch(
            "{{ url('/dashboard/total-updl') }}",
            {
                method: "GET",

                headers: {
                    "Accept": "application/json",
                    "X-Requested-With": "XMLHttpRequest"
                },

                cache: "no-store"
            }
        )

        .then(response => {

            if (!response.ok) {

                throw new Error(
                    "Gagal mengambil data UPDL"
                );

            }

            return response.json();

        })

        .then(data => {

            const element =
                document.getElementById(
                    "totalUpdl"
                );

            if (
                element &&
                typeof data.total !== "undefined"
            ) {

                element.textContent =
                    data.total;

            }

        })

        .catch(error => {

            console.error(
                "Gagal mengambil total UPDL:",
                error
            );

        });

    }



    /* =====================================================
       TOTAL KRITERIA
    ===================================================== */

    function updateTotalKriteria() {

        fetch(
            "{{ url('/dashboard/total-kriteria') }}",
            {
                method: "GET",

                headers: {
                    "Accept": "application/json",
                    "X-Requested-With": "XMLHttpRequest"
                },

                cache: "no-store"
            }
        )

        .then(response => {

            if (!response.ok) {

                throw new Error(
                    "Gagal mengambil data kriteria"
                );

            }

            return response.json();

        })

        .then(data => {

            const element =
                document.getElementById(
                    "totalKriteria"
                );

            if (
                element &&
                typeof data.total !== "undefined"
            ) {

                element.textContent =
                    data.total;

            }

        })

        .catch(error => {

            console.error(
                "Gagal mengambil total kriteria:",
                error
            );

        });

    }



    /* =====================================================
       LOAD PERTAMA KALI
    ===================================================== */

    updateTotalUpdl();

    updateTotalKriteria();



    /* =====================================================
       UPDATE SETIAP 2 DETIK
    ===================================================== */

    setInterval(
        updateTotalUpdl,
        2000
    );

    setInterval(
        updateTotalKriteria,
        2000
    );


</script>


</body>
</html>