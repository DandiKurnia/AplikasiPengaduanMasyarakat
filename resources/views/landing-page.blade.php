<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LAPOR PAK</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <style>
        .foi-header{
            background: linear-gradient(to right, #4e73df 44%, #6cb1ff 85%);
        }

        .aktif{
            color: #fff !important;
            font-weight: 700;
        }

        .nav-links{
            color: #dddfeb !important;
        }

        .circle{
            position: absolute;
            top: 62rem;
            right: 7rem;
            /* bottom: 50px; */
            width: 15rem;
            height: 15rem;
            background: linear-gradient(90deg, #fff 1.938rem, transparent 1px) 50%, linear-gradient(180deg, #fff 1.938rem, #6cb1ff 1px) 50%;
            background-size: 2.063rem 2.063rem;
            /* background: linear-gradient(to right, #4e73df 44%, #6cb1ff); */
            border-radius: 100%;
            z-index: -999999;
        }

        .active{
            background: #6cb1ff !important;
            color: #fff !important;
        }

        .circle-read{
            width: 4.5rem;
            height: 4.5rem;
            background: #fff;
            color: #6cb1ff;
            border-radius: 100%;
            font-size: 1.5rem;
            box-shadow: 0 10px 20px rgb(0 0 0 / 5%);
        }


        .line-read{
            position: relative;
            top: 3rem;
            width: 70%;
        }

        .foi-footer{
            background: linear-gradient(to right, #4e73df 44%, #6cb1ff 85%);
        }

    </style>

    <!-- Custom styles for this template-->
    <link href="/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
</head>

<body>
    <header class="foi-header landing-header">
        <div class="container" id="Home">
            <nav class="navbar navbar-expand-lg navbar-light foi-navbar" data-aos="fade-down" data-aos-duration="1500">
                <a class="navbar-brand" href="/">
                    <img src="assets/images/lapor_pak.png" alt="laporpak" width="100px">
                </a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav ml-lg-4 mr-auto mt-2 mt-lg-0">
                        <li class="nav-item aktif">
                            <a class="nav-link nav-links" href="#Home">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-links" href="#fituAplikasi">Fitur Aplikasi</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav mt-2 mt-lg-0">
                        <li class="nav-item mr-2 mb-3 mb-lg-0">
                            <a class="btn btn-outline-light rounded-pill" href="/register">Sign up</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-outline-light rounded-pill" href="/login">Login</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="header-content mt-lg-5 mt-3">
                {{-- <div class="background"></div> --}}
                <div class="row align-items-center" data-aos="fade-right">
                    <div class="col-md-6" data-aos="fade-right" data-aos-duration="1500">
                        <h1 class="text-gray-100 text-bold" style="font-weight: bold !important;">Layanan pengaduan masyarakat online</h1>
                        <p class="text-light">Sampaikan laporan Anda di sini, kami akan memprosesnya dengan cepat.</p>
                        <a class="btn rounded-pill btn-outline-light" href="/login">Laporkan!!</a>
                    </div>
                    <div class="col-md-6 justify-content-end d-flex" data-aos="fade-left" data-aos-duration="1500">
                        <img src="assets/images/clients/mono.svg" alt="app" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,192L40,208C80,224,160,256,240,229.3C320,203,400,117,480,117.3C560,117,640,203,720,213.3C800,224,880,160,960,117.3C1040,75,1120,53,1200,69.3C1280,85,1360,139,1400,165.3L1440,192L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
    </header>
    <section class="py-5 mb-5" id="fituAplikasi">
        <div class="container" data-aos="fade-up" data-aos-duration="1500">
            <div class="circle"></div>
            <h2 class="text-gray-900 mb-lg-3 mb-2 text-center" style="font-weight: bold !important;">Fitur Aplikasi</h2>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card mb-3 landing-faq-card">
                        <div class="card-header bg-white" id="faqOneTitle">
                            <a href="#faqOneCollapse" class="d-flex align-items-center" data-toggle="collapse">
                                <h6 class="mb-0">Formulir Pengaduan</h6> <i class="far fa-plus-square ml-auto"></i>
                            </a>
                        </div>
                        <div id="faqOneCollapse" class="collapse" aria-labelledby="faqOneTitle">
                            <div class="card-body">
                                <p class="mb-0 text-gray">Memungkinkan pengguna untuk mengajukan pengaduan dengan mengisi formulir yang berisi informasi seperti jenis masalah, deskripsi, lokasi, dan lainnya.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3 landing-faq-card">
                        <div class="card-header bg-white" id="faqFourTitle">
                            <a href="#faqFourCollapse" class="d-flex align-items-center" data-toggle="collapse">
                                <h6 class="mb-0">Galeri Foto</h6> <i class="far fa-plus-square ml-auto"></i>
                            </a>
                        </div>
                        <div id="faqFourCollapse" class="collapse" aria-labelledby="faqFourTitle">
                            <div class="card-body">
                                <p class="mb-0 text-gray">Pengguna dapat melampirkan gambar sebagai bukti atau deskripsi lebih jelas dari masalah yang diadukan.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card mb-3 landing-faq-card">
                        <div class="card-header bg-white" id="faqThreeTitle">
                            <a href="#faqThreeCollapse" class="d-flex align-items-center" data-toggle="collapse">
                                <h6 class="mb-0">Pelacakan Status Pengaduan</h6> <i class="far fa-plus-square ml-auto"></i>
                            </a>
                        </div>
                        <div id="faqThreeCollapse" class="collapse" aria-labelledby="faqThreeTitle">
                            <div class="card-body">
                                <p class="mb-0 text-gray">Pengguna dapat memantau status pengaduan mereka, baik itu sedang dalam proses penyelesaian atau sudah selesai.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 mb-5">
        <div class="container" data-aos="fade-up" data-aos-duration="1000">
            <hr class="line-read">
            <div class="row">
                <div class="col-lg-3 d-flex align-items-center flex-column">
                    <div class="circle-read active d-flex justify-content-center mb-2">
                        <i class="fas fa-fw fa-file m-auto"></i>
                    </div>
                    <div class="read-text text-center">
                        <p class="text-gray-900" style="margin-bottom: 0 !important">Tulis Laporan</p>
                        <p class="text-muted">Laporkan keluhan atau aspirasi anda dengan jelas dan lengkap</p>
                    </div>
                </div>
                <div class="col-lg-3 d-flex align-items-center flex-column">
                    <div class="circle-read d-flex justify-content-center mb-2">
                        <i class="fas fa-fw fa-share m-auto"></i>
                    </div>
                    <div class="read-text text-center">
                        <p class="text-gray-900" style="margin-bottom: 0 !important">Proses Verifikasi</p>
                        <p class="text-muted">Dalam 3 hari, laporan Anda akan diverifikasi dan diteruskan kepada instansi berwenang</p>
                    </div>
                </div>
                <div class="col-lg-3 d-flex align-items-center flex-column">
                    <div class="circle-read d-flex justify-content-center mb-2">
                        <i class="fas fa-fw fa-comments m-auto"></i>
                    </div>
                    <div class="read-text text-center">
                        <p class="text-gray-900" style="margin-bottom: 0 !important">Berikan Tanggapan</p>
                        <p class="text-muted">Anda dapat menanggapi kembali balasan yang diberikan oleh instansi</p>
                    </div>
                </div>
                <div class="col-lg-3 d-flex align-items-center flex-column">
                    <div class="circle-read d-flex justify-content-center mb-2">
                        <i class="fas fa-fw fa-check m-auto"></i>
                    </div>
                    <div class="read-text text-center">
                        <p class="text-gray-900" style="margin-bottom: 0 !important">Selesai</p>
                        <p class="text-muted">Laporan Anda akan terus ditindaklanjuti hingga terselesaikan</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="foi-footer text-white">
        <div class="container">
            <div class="row footer-widget-area align-items-center p-1 p-md-2">
                <div class="col-md-9">
                    <div class="py-3">
                        <img src="assets/images/lapor_pak.png" alt="Lapor Pak" width="100px">
                    </div>
                </div>
                <div class="col-md-3 mt-3 mt-md-3">
                    <p>
                        &copy; Lapor Pak. 2023
                    </p>
                    <p>All rights reserved.</p>
                    <nav class="social-menu">
                        <a href="#!"><img src="assets/images/facebook.svg" alt="facebook"></a>
                        <a href="#!"><img src="assets/images/instagram.svg" alt="instagram"></a>
                        <a href="#!"><img src="assets/images/twitter.svg" alt="twitter"></a>
                        <a href="#!"><img src="assets/images/youtube.svg" alt="youtube"></a>
                    </nav>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    
    <!-- Bootstrap core JavaScript-->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/js/sb-admin-2.min.js"></script>

</body>

</html>
