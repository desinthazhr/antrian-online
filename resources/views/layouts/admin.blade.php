<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/admin.css">
    <title>@yield('title')</title>
</head>

<body>
    <nav class="navbar">
        <div class="container-fluid">
            <a class="navbar-brand">
                <img src="/img/logo-rev.png" alt="" width="50" height="50" class="d-inline-block align-text-top">
                <P> BENGKEL AUTO SERVICE SEHAT </P>
            </a>
            <form class="d-flex" role="search">

                <button class="btn btn-outline-primary" style="margin-right:20px ;" type="submit"><i
                        class="bi bi-person-circle"></i>
                    ADMIN</button>
            </form>
        </div>
    </nav>

    <div class="row">
        <div class="col-md-2 sidebar pt-4">
            <ul class="nav flex-column ms-3">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/admin">
                        <i class="bi bi-speedometer2 text-black me-3"></i>
                        Dashboard</a>
                    <hr class="bg-secondary">
                    </hr>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/antrian-admin">
                        <i class="bi bi-bar-chart-line text-black  me-3"></i>
                        Antrian</a>
                    <hr class="bg-secondary">
                    </hr>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/kelola-antrian">
                        <i class="bi bi-gear text-black  me-3"></i>
                        Kelola Antrian</a>
                    <hr class="bg-secondary">
                    </hr>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/riwayat-antrian">
                        <i class="bi bi-clock-history text-black  me-3"></i>
                        Riwayat Antrian</a>
                    <hr class="bg-secondary">
                    </hr>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/rekapan-dana">
                        <i class="bi bi-wallet2 text-black  me-3"></i>
                        Rekapan Dana</a>
                    <hr class="bg-secondary">
                    </hr>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="keluar.html">
                        <i class="bi bi-box-arrow-right text-black  me-3"></i>
                        Keluar</a>
                    <hr class="bg-secondary">
                    </hr>
                </li>
            </ul>
        </div>

        {{-- container --}}
            @yield('content')    
        {{-- end container --}}
        </body>

</html>