<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- icon website -->
    <link rel="icon" href="<?php echo base_url('assets/icon.png'); ?>" type="image/gif">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/custom.css'); ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/08266d53b0.js" crossorigin="anonymous"></script>

    <!-- menampilkan judul dengan parameter yg telah disimpan pada controller -->
    <title><?= $title; ?></title>
</head>

<body>

    <!-- navbar pada setiap halaman -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
        <div class="container-md">
            <a class="navbar-brand" href="#" h1>
                <img src="<?php echo base_url('assets/icon.png'); ?>" width="60" height="60" alt="...">LSP Teknologi Digital
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav ">
                    <!-- mengarahkan pada tiap tiap halaman -->
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?= base_url('/'); ?>">Home</a>
                    <!-- </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Profil</a>
                    </li> -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Profil</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?= base_url('/pages/profil'); ?>">Profil Lemaga Sertifikasi Profesi</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('/media'); ?>">Media</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/skema'); ?>">Sertifikasi</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/media'); ?>">Media</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/pages/contact'); ?>">Contact</a>
                    </li>
                    <li class="nav-item d-grid mx-2">
                        <a class="btn btn-master btn-secondary me-3" type="button" href="<?= base_url('/auth/login'); ?>">Log In</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

    

    <!-- menampilkan konten dengan parameter 'content' yg ada pada setiap halaman -->
    <?= $this->renderSection('content'); ?>

    <button type="button" class="shadow btn" id="btn-to-top"><i class="fas fa-arrow-up"></i></button>

    <!-- footer -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->

    <!-- custom jquery -->
    <script src="<?= base_url('assets/script/script.js') ?>"></script>
</body>

<!-- footer -->
<div class="border-top">
    <footer class="container row row-cols-sm-4 py-5 mx-auto">

        <div class="col-md-3 mt-2">
            <a href="/" class="d-flex align-items-center mb-2 link-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32">
                    <use xlink:href="#bootstrap"></use>
                </svg>
            </a>
            <p class="text-muted">© 2021</p>
        </div>

        <div class="col-sm-4 mt-2">
            <h5>Mitra Lembaga Sertifikasi</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Lembaga Sertifikasi MIGAS</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Lembaga Sertifikasi Manajemen Resiko</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Lembaga Sertifikasi Kimia Industri</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Lembaga Sertifikasi Teknologi</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">KOMINFO</a></li>
            </ul>
        </div>

        <div class="col-sm-5 mt-2">
            <h5>Kontak</h5>
            <ul class="fa-ul">
                <li style="padding: 6px;">
                    <h7 class="text-muted"><span class="fa-li"><i class="fas fa-map-marked-alt fa-2x" style="font-size: 1.5rem;"></i></span> Pulogebang Indah Blok J11 No 34, Jakarta Timur</h7>
                </li>
                <li style="padding: 6px;">
                    <h7 class="text-muted"><span class="fa-li"><i class="fas fa-map-marked-alt fa-2x" style="font-size: 1.5rem;"></i></span> Jalan Demangan Baru No. 8, Catur Tunggal, Depok, Demangan Baru, DIY</h7>
                </li>
                <li style="padding: 6px;">
                    <h7 class="text-muted"><span class="fa-li"><i class="fas fa-map-marked-alt fa-2x" style="font-size: 1.5rem;"></i></span> Pusat Inovasi LIPI Tenant A3, Cibinong, 0817 401157</h7>
                </li>
                <li style="padding: 6px;">
                    <h7 class="text-muted"><span class="fa-li"><i class="fas fa-phone-square-alt fa-2x" style="font-size: 1.5rem;"></i></span>(0721) 666999</h7>
                </li>
                <li style="padding: 6px;">
                    <h7 class="text-muted"><span class="fa-li"><i class="fab fa-whatsapp fa-2x" style="font-size: 1.5rem;"></i></span>+6285329489247</h7>
                </li>
            </ul>
        </div>
    </footer>
</div>

</html>