<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Agenda - Sistem Informasi Kegiatan Masjid Se Sukorejo</title>
    <!-- MDB icon -->
    <link rel="icon" href="../img/icon/favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/dd822cdcdc.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <!-- MDB -->
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/formLogic.js"></script>

    <link rel="stylesheet" href="../css/pagination.css">
    <link rel="stylesheet1" href="../css/bootstrap.css" />
    <link rel="stylesheet" href="../css/mdb.min.css" />
    <link rel="stylesheet" href="../css/blogCard.css">
</head>

<body>
    <header style="margin: 2cm;">
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container">
                <a class="navbar-brand" href="../index.php">
                    <img src="../img/LogoMasjid.png" height="30" alt="Pondok Pesantren Nurul Jadid Al - Mas'udiyah" loading="lazy" />
                </a>
                <!-- Responsive Header -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fas fa-bars"></span>
                </button>
                <!-- Responsive Header -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a href="../index.php">
                                <button type="button" class="btn btn-link px-3 me-2">
                                    Dashboard
                                </button>
                            </a>
                        </li>
                        <!-- <li class="nav-item">

                            <button type="button" class="btn btn-link px-3 me-2">
                                PPDB
                            </button>
                            </a>
                        </li> -->
                        <li class="nav-item">
                            <a href="/agenda">
                                <button type="button" class="btn btn-success btn-rounded">
                                    Kegiatan
                                </button>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ URL('/aboutme') }}">
                                <button type="button" class="btn btn-link px-3 me-2">
                                    Tentang Kami
                                </button>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ URL('/login') }}">
                                <button type="button" class="btn btn-link px-3 me-2">
                                    Login
                                </button>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Qoute -->
    <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light text-center">Agenda Atau Kegiatan-Kegiatan</h1>
            <h1 class="text-center" style="color: #00b74a;">Masjid Se Sukorejo</h1>
            <p class="text-center fst-italic"><cite>"Pribadi saleh, mandiri, berilmu, berjuang dan berbakti kepada agama, masyarakat dan bangsa"</cite></p>
        </div>
    </div>
    <!-- Qoute -->
    <div id="preview" class="preview">
        <div style="display: none;"></div>
        <div>
            <div style="position: relative;" data-draggable="true">
                <!---->
                <!---->
            </div>
            <section draggable="false" class="container pt-5" data-v-271253ee="">
                <section class="mb-10 text-center">
                    <h2 class="fw-bold mb-7 text-center">Kegiatan Terbaru</h2>
                    @foreach($kegiatans as $kegiatan)
                    <div class="card-group">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">{{ $kegiatan->title }}</h5>
                                <p class="card-text">{{ $kegiatan->content }}</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    @endforeach


                    <!-- Search -->
                    <!-- <form action="blog.php" method="GET">
                        <div class="container m-5 input-group justify-content">
                            <div class="">
                                <input name="search" type="text" class="form-control rounded" placeholder="Search The Site" aria-label="Search" aria-describedby="search-addon" required />
                            </div>
                            <span class="input-group-btn">
                                <button class="btn btn-primary">
                                    <i class="fas fa-search"></i>
                                </button>
                            </span>

                        </div>
                    </form> -->

                    <!-- Search -->

                    <!-- Main Content -->

                    <ul class="pagination pagination-lg">

                    </ul>
                    <!-- Pagination -->

        </div>
    </div>
    </div>

    <footer class="py-3 my-4">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="../index.php " class="nav-link px-2 text-muted">Home</a></li>
            <li class="nav-item"><a href="{{ URL('/agenda') }}" class="nav-link px-2 text-muted">Agenda</a></li>
            <li class="nav-item"><a href="{{ URL('/aboutme') }}" class="nav-link px-2 text-muted">Tentang Kami</a></li>
        </ul>
        <p class="text-center text-muted">© 2023 NurKholisMajid - Sistem Informasi Kegiatan Masjid Se Sukorejo</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js " integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p " crossorigin="anonymous "></script>
</body>

</html>