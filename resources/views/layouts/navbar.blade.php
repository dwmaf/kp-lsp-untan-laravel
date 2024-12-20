<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>LSP UNTAN</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/user-navbar.css">
    <script src="/js/scripts.js"></script>
    <script src="/js/datatables-simple-demo.js"></script>
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

</head>

<body class="sb-nav-fixed">

    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a href="/">
                <img class="navbar-brand" src="{{ url('/logo-lsp-untan.PNG') }}" width="120px" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link {{ Request::is('/') ? 'active' : '' }}"
                            href="/">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link {{ Request::is('profile') ? 'active' : '' }}"
                            href="/profile">Profile</a></li>
                    <li class="nav-item"><a class="nav-link {{ Request::is('skema') ? 'active' : '' }}"
                            href="/skema">Skema</a></li>
                    <li class="nav-item"><a class="nav-link {{ Request::is('asesor') ? 'active' : '' }}"
                            href="/asesor">Asesor</a></li>
                    <li class="nav-item"><a class="nav-link {{ Request::is('jadwal') ? 'active' : '' }}"
                            href="/jadwal">Jadwal</a></li>
                    <li class="nav-item"><a class="nav-link {{ Request::is('berita*') ? 'active' : '' }}"
                            href="/berita">Berita</a></li>
                    <li class="daftar-padding nav-item  "><a class="daftar btn btn-primary position-relative"
                            href="https://forms.gle/87wbLb7Qk2MVoc8g8">Daftar</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="layoutSidenav_content" class="bg-light ">
        <main>
            {{-- content child di sini --}}
            @yield('child')
        </main>
        <!-- Copyright Section-->
        <div class="copyright py-4  text-start bg-lspuntan text-white">
            <div class="container"><small>Copyright &copy; LSP UNTAN</small></div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
    @include('components.modalskemaguest')
</body>

</html>
