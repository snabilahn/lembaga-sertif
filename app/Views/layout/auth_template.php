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
    <link rel="stylesheet" href='<?php echo base_url("assets/css/custom.css"); ?>'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/08266d53b0.js" crossorigin="anonymous"></script>

    <!-- menampilkan judul dengan parameter yg telah disimpan pada controller -->
    <title><?= $title; ?></title>
</head>

<!-- vh means viewport height -->

<body class="base-login d-flex align-items-center min-vh-100">
    <div class="container">
        <!-- Outer Row -->
        <div class="row">
            <div class="col-lg-6 mt-4">
                <img style="max-width:90%;" src="<?php echo base_url('assets/undraw_access_account_re_8spm.svg') ?>" alt="login">
            </div>
            <div class="col-lg-5">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">

                        <!-- menampilkan konten dengan parameter 'login' yg ada pada setiap halaman -->
                        <?= $this->renderSection('login'); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jquery -->
    <!-- <script src="<?= base_url('assets/script/script.js') ?>"></script> -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>