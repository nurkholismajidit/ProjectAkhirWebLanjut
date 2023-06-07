<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>About Me- Sistem Informasi Kegiatan Masjid Se Sukorejo</title>
    <!-- MDB icon -->
    <link rel="icon" href="../img/icon/favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet1" href="../css/bootstrap.css" />
    <link rel="stylesheet" href="../css/mdb.min.css" />
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
                            <a href="{{ URL('/agenda') }}">
                                <button type="button" class="btn btn-link px-3 me-2">
                                    Kegiatan
                                </button>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ URL('/aboutme') }}">
                                <button type="button" class="btn btn-success btn-rounded">
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

    <!-- Main Content -->
    <div style="position: relative;" data-draggable="true" class="" draggable="false">


        <section draggable="false" class="container pt-5" data-v-271253ee="">
            <section id="Tentang Kami" class="mb-10 p-5">
                <h2 class="fw-bold mb-5 text-center">Tentang Kami <br /></h2>
                <div class="row gx-lg-5 mb-5 flex-lg-row-reverse align-items-center">
                    <div class="col-md-6 mb-4 mb-md-0 hover-zoom">
                        <img src="../img/event/event_Akhirussanah_2.jpeg" class="w-100 shadow-5-strong rounded-4 mb-4" alt="" aria-controls="#picker-editor" draggable="false" />
                    </div>

                    <div class="card">
                        <div class="card-body text-center">
                            Ini Adalah Program atau Aplikasi Sistem Informasi Kegiatan Masjid Se Sukorejo...
                        </div>
                    </div>
                    <!-- <div class="col-md-6 mb-4">
                        <h3 class="fw-bold mb-3">Ini Adalah Program Atau Aplikasi Sistem Informasi Kegiatan Masjid Se Sukorejo Yang Saya Buat</h3>
                        <p style="text-align: justify;" class="text-muted ">

                        </p>
                    </div> -->
                </div>
            </section>
            <section id="Visi dan Misi" class="mb-10 p-5">
                <h2 class="fw-bold mb-5 text-center">Tujuan Pembuatan Program atau Aplikasi <br /></h2>
                <!-- <div class="row gx-lg-5 mb-5 flex-lg-row-reverse align-items-center">
                    <div class="col-md-6 mb-4">
                    
                    </div>
                </div> -->
                <div class="card">
                    <div class="card-body">
                        <p class="text-center"> Membuat Program Karena Di Daerah Sukorejo Masih Sulit Untuk Menginformasikan Kegiatan-Kegiatan Masjid di Daerah Sukorejo</p><br>
                        <p class="text-center">Mohon Maaf jika program yang saya buat masih sederhana</p>
                    </div>
                    <p class="text-center">Jangan Lupa <i class="fa fa-code" style="font-size:24px"></i></p>
                </div>
            </section>
        </section>
    </div>
    <!-- Akhir tentang kami -->



    <footer class="py-3 my-4">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="../index.php" class="nav-link px-2 text-muted">Home</a></li>
            <!-- <li class="nav-item"><a href="pages/ppdb.php" class="nav-link px-2 text-muted">PPDB</a></li> -->
            <li class="nav-item"><a href="{{ URL('/agenda') }}" class="nav-link px-2 text-muted">Agenda</a></li>
            <li class="nav-item"><a href="{{ URL('/aboutme') }}" class="nav-link px-2 text-muted">Tentang Kami</a></li>
        </ul>
        <p class="text-center text-muted">© 2023 NurKholisMajid - Sistem Informasi Kegiatan Masjid Se Sukorejo</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>