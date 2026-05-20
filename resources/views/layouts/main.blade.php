
<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>@yield('title', 'Sistem Informasi Jurusan TI')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        :root {
            --app-bg: #eef5ff;
            --app-surface: rgba(255, 255, 255, .88);
            --app-dark: #102033;
            --app-primary: #0d6efd;
            --app-primary-dark: #0747a6;
            --app-primary-soft: #e7f1ff;
            --app-success: #0ea5a4;
            --app-border: rgba(13, 110, 253, .12);
            --app-shadow: 0 18px 45px rgba(13, 42, 83, .11);
            --app-shadow-hover: 0 24px 58px rgba(13, 42, 83, .16);
        }

        body {
            min-height: 100vh;
            background:
                radial-gradient(circle at top left, rgba(13, 110, 253, .18), transparent 34rem),
                radial-gradient(circle at 85% 10%, rgba(14, 165, 164, .14), transparent 28rem),
                linear-gradient(180deg, #f8fbff 0%, var(--app-bg) 46%, #f7fbff 100%);
            color: #17202a;
            font-family: "Plus Jakarta Sans", system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            letter-spacing: 0;
        }

        .app-main {
            padding-top: 104px;
            padding-bottom: 56px;
        }

        .navbar.app-navbar {
            background: linear-gradient(135deg, rgba(6, 50, 122, .96), rgba(13, 110, 253, .94)) !important;
            border-bottom: 1px solid rgba(255, 255, 255, .16);
            box-shadow: 0 18px 40px rgba(13, 42, 83, .2);
            backdrop-filter: blur(16px);
            padding-top: .85rem;
            padding-bottom: .85rem;
        }

        .navbar-brand {
            display: inline-flex;
            align-items: center;
            gap: .65rem;
            font-weight: 800;
            letter-spacing: .01em;
        }

        .brand-logo {
            width: 42px;
            height: 42px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 13px;
            color: #fff;
            background: linear-gradient(145deg, #2e91ff, #0d6efd);
            box-shadow: inset 0 1px 0 rgba(255, 255, 255, .28), 0 14px 28px rgba(0, 39, 108, .28);
            font-size: 1.35rem;
        }

        .app-navbar .nav-link {
            border-radius: 999px;
            color: rgba(255, 255, 255, .78) !important;
            font-weight: 600;
            padding: .55rem .95rem;
            transition: .2s ease;
        }

        .app-navbar .nav-link.active,
        .app-navbar .nav-link:hover {
            background: rgba(255, 255, 255, .16);
            color: #fff !important;
            transform: translateY(-1px);
        }

        .app-navbar .form-control {
            min-width: 230px;
            color: #fff;
            background: rgba(255, 255, 255, .13);
            border-color: rgba(255, 255, 255, .22);
        }

        .app-navbar .form-control::placeholder {
            color: rgba(255, 255, 255, .72);
        }

        .page-heading {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
            margin-bottom: 1.25rem;
            padding: .25rem 0;
        }

        .page-heading h2 {
            color: var(--app-dark);
            font-weight: 800;
            margin-bottom: .25rem;
        }

        .page-heading p {
            margin-bottom: 0;
        }

        .card {
            background: var(--app-surface);
            border: 1px solid var(--app-border);
            border-radius: 20px;
            box-shadow: var(--app-shadow);
            transition: transform .2s ease, box-shadow .2s ease, border-color .2s ease;
        }

        .card:hover {
            border-color: rgba(13, 110, 253, .2);
            box-shadow: var(--app-shadow-hover);
            transform: translateY(-2px);
        }

        .card-header {
            border-bottom: 1px solid var(--app-border);
            border-radius: 20px 20px 0 0 !important;
            font-weight: 700;
            background: linear-gradient(135deg, var(--app-primary), #0b4cb9) !important;
        }

        .card-header.bg-primary {
            background: linear-gradient(135deg, var(--app-primary), #0b4cb9) !important;
        }

        .table {
            margin-bottom: 0;
            border-color: rgba(13, 110, 253, .1);
        }

        .table thead th {
            background: linear-gradient(180deg, #f7fbff, #eff6ff);
            border-bottom-width: 1px;
            color: #111827;
            font-weight: 700;
            white-space: nowrap;
            padding-top: 1rem;
            padding-bottom: 1rem;
        }

        .table tbody td {
            color: #334155;
            padding-top: .95rem;
            padding-bottom: .95rem;
            vertical-align: middle;
        }

        .table-hover tbody tr:hover {
            background-color: #f2f8ff;
        }

        .btn {
            border-radius: 12px;
            font-weight: 700;
            box-shadow: none;
            transition: transform .18s ease, box-shadow .18s ease, background .18s ease;
        }

        .btn:hover {
            transform: translateY(-1px);
            box-shadow: 0 12px 24px rgba(13, 42, 83, .14);
        }

        .btn-primary,
        .btn-success {
            border-color: transparent;
            background: linear-gradient(135deg, var(--app-primary), #0b5ed7);
        }

        .btn-primary:hover,
        .btn-success:hover {
            border-color: transparent;
            background: linear-gradient(135deg, #0b5ed7, var(--app-primary-dark));
        }

        .btn-warning {
            color: #5f4100;
            border-color: transparent;
            background: linear-gradient(135deg, #ffd666, #ffc107);
        }

        .btn-danger {
            border-color: transparent;
            background: linear-gradient(135deg, #f43f5e, #dc3545);
        }

        .btn-outline-light {
            border-color: rgba(255, 255, 255, .7);
        }

        .btn-outline-success {
            color: #fff;
            border-color: rgba(255, 255, 255, .42);
        }

        .btn-outline-success:hover {
            color: var(--app-primary-dark);
            border-color: #fff;
            background: #fff;
        }

        .btn-secondary {
            border-color: transparent;
            background: #e8eef7;
            color: #344054;
        }

        .btn-secondary:hover {
            color: #17202a;
            background: #dbe6f5;
        }

        .form-control,
        .form-select {
            border-radius: 14px;
            border-color: #d6e2f2;
            padding: .72rem .9rem;
            box-shadow: none;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: rgba(13, 110, 253, .55);
            box-shadow: 0 0 0 .22rem rgba(13, 110, 253, .12);
        }

        .action-buttons {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: .5rem;
            flex-wrap: nowrap;
        }

        .stat-icon {
            width: 58px;
            height: 58px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 18px;
            font-weight: 800;
            font-size: 1.35rem;
        }

        .form-card {
            max-width: 980px;
            margin: 0 auto;
        }

        .form-card .card-header h4 {
            margin-bottom: .25rem;
        }

        .form-card .card-header p {
            margin-bottom: 0;
        }

        .form-label {
            font-weight: 600;
            color: #344054;
        }

        .detail-label {
            width: 220px;
            color: #475467;
            font-weight: 700;
            background: #f5f9ff;
        }

        .badge-prodi {
            background: linear-gradient(135deg, #e7f1ff, #d8ebff);
            color: #0d6efd;
            border: 1px solid #b6d4fe;
            font-weight: 700;
            border-radius: 999px;
        }

        .hero-panel {
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(255, 255, 255, .22);
            border-radius: 28px;
            background:
                radial-gradient(circle at 88% 18%, rgba(255, 255, 255, .26), transparent 15rem),
                linear-gradient(135deg, #0646ad 0%, #0d6efd 52%, #39a7ff 100%);
            box-shadow: 0 28px 80px rgba(13, 78, 181, .28);
        }

        .hero-panel::before {
            content: "";
            position: absolute;
            inset: 0;
            background-image:
                linear-gradient(rgba(255,255,255,.11) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255,255,255,.11) 1px, transparent 1px);
            background-size: 44px 44px;
            mask-image: linear-gradient(90deg, transparent 0%, #000 30%, #000 100%);
            opacity: .45;
        }

        .hero-panel > * {
            position: relative;
            z-index: 1;
        }

        .hero-eyebrow {
            display: inline-flex;
            align-items: center;
            gap: .5rem;
            border: 1px solid rgba(255, 255, 255, .26);
            border-radius: 999px;
            padding: .45rem .8rem;
            background: rgba(255, 255, 255, .12);
            color: rgba(255, 255, 255, .86);
            font-size: .88rem;
            font-weight: 700;
        }

        .text-white-75 {
            color: rgba(255, 255, 255, .78) !important;
        }

        .hero-visual {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: min(280px, 72vw);
            aspect-ratio: 1;
            border-radius: 32px;
            background: rgba(255, 255, 255, .14);
            box-shadow: inset 0 1px 0 rgba(255, 255, 255, .28), 0 20px 45px rgba(0, 0, 0, .12);
        }

        .quick-card {
            min-height: 100%;
        }

        .quick-card .card-body {
            display: flex;
            flex-direction: column;
            gap: 1rem;
            align-items: center;
            justify-content: center;
            min-height: 245px;
            text-align: center;
        }

        .quick-card h4 {
            color: var(--app-dark);
            font-weight: 800;
            line-height: 1.25;
        }

        .stat-logo {
            width: 72px;
            height: 72px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 18px;
            background: linear-gradient(145deg, #eef7ff, #ddecff);
            box-shadow: inset 0 1px 0 rgba(255, 255, 255, .82), 0 16px 30px rgba(13, 42, 83, .1);
            font-size: 1.75rem;
        }

        .stat-logo-primary {
            color: #0d6efd;
        }

        .stat-logo-success {
            color: #168f5a;
        }

        .stat-logo-danger {
            color: #dc3545;
        }

        .footer {
            background: linear-gradient(135deg, #07182e, #0b2f69) !important;
            border-top: 1px solid rgba(255, 255, 255, .12);
            box-shadow: 0 -10px 28px rgba(13, 42, 83, 0.1);
        }

        .icon-chip {
            width: 38px;
            height: 38px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 12px;
            background: var(--app-primary-soft);
            color: var(--app-primary);
            flex: 0 0 auto;
        }

        .shadow-sm {
            box-shadow: var(--app-shadow) !important;
        }

        .rounded {
            border-radius: 20px !important;
        }

      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      @media (max-width: 575.98px) {
        .page-heading {
            align-items: stretch;
            flex-direction: column;
        }

        .page-heading .btn {
            width: 100%;
        }
      }
    </style>

  </head>
    <body class="d-flex flex-column h-100">
        @include('layouts.header')    

        <!-- Begin page content -->
        <main class="app-main flex-grow-1">
            @yield('content')
        </main>

        @include('layouts.footer')

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    </body>
</html>
