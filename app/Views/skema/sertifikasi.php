<!-- memanggil dan menghubungkan layout template untuk tampilan yg telah dibuat -->
<?= $this->extend('layout/template'); ?>

<!-- menandai bagian awal content yg akan ditampilkan melalui layout template -->
<?= $this->section('content'); ?>

<div class="container" style="padding: 100px 10px;">
    <div class="row">
        <nav class="col-lg-3" id="navbar-example3">
            <ul class="navbar sticky-top navbar-light bg-light flex-column align-items-stretch p-3" role="tablist">
                <a class="nav-link" href="#section1">Digital Marketing & Office</a>
                <a class="nav-link" href="#section2">Data Science</a>
                <a class="nav-link" href="#section3">Network Administrator</a>
                <a class="nav-link" href="#section4">Project Quality & Management</a>
            </ul>
        </nav>

        <!-- list skema sertifikasi -->
        <div class="col-lg-9">
            <h2>Daftar Skema Sertifikasi</h2>
            <div class="row row-cols-1 row-cols-lg-3 mb-3 text-center">
                <!-- memanggil dari database dan ditampilkan-->
                <?php foreach ($skema as $s) : ?>
                    <div class="col list-sertif">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div class="card-header py-3">
                                <h4 class="my-0 fw-normal" style="font-size: 15px;"><?= $s['judul']; ?></h4>
                            </div>
                            <div class="card-body">
                                <img src="assets/<?= $s['gambar']; ?>" width="200" height="200" alt="...">
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li class="card-text"><?= $s['penjelasan']; ?></li>
                                    <li class="expand-item">
                                        <div class="answer">
                                            <p><?= $s['penjelasan']; ?></p>
                                        </div>
                                        <a class="read-more"><span>Read More</span></a>
                                    </li>
                                </ul>
                                <button type="button" class="w-100 btn btn-lg btn-outline-primary" style="font-size: 15px;">Lihat Skema</button>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
</div>
<!-- jquery -->
<script src="assets/script/script.js"></script>
<!-- menandai bagian akhir content yg akan ditampilkan melalui layout template -->
<?= $this->endSection(); ?>