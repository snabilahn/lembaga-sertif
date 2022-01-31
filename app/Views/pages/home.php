<!-- memanggil dan menghubungkan layout template untuk tampilan yg telah dibuat -->
<?= $this->extend('layout/template'); ?>

<!-- menandai bagian awal content yg akan ditampilkan melalui layout template -->
<?= $this->section('content'); ?>

<!-- carousel image pada homepage -->
<div id="carouselExampleIndicators" class="carousel slide my-5" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="assets/carousel_1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="assets/carousel_2.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
</div>

<!-- isi dari homepage -->
<div class="container">
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-8 col-md-8 mx-auto">
                <h1>Lembaga Sertifikasi Profesi</h1>
                <h3 class="my-3">Mengapa Kami?</h3>
                <p class="lead text">Karena komitmen kami untuk meningkatkan kebertrimaan Sertifikat Kompetensi oleh industri baik di tingkat nasional maupun internasional.</p>
            </div>

            <div class="container my-4">
                <div class="row">
                <div class="col-lg-4 mx-auto">
                    <i class="fas fa-clipboard-check home-icon"></i>
                    <h5 class="my-2 mx-auto">36 Skema Sertifikasi</h5>
                    <p class="text-muted">Skema / Profesi / Jabatan / Pekerjaan di bidang-bidang strategis sektor Teknologi Informasi dan Komunikasi.</p>
                </div>
                <div class="col-lg-4 mx-auto">
                    <i class="fas fa-handshake home-icon"></i>
                    <h5 class="my-2 mx-5">300++ Link DUDI</h5>
                    <p class="text-muted">Perusahaan mitra LSP yang siap untuk menerima profesional bidang IT yang telah tersertifikasi, kompeten dan sesuai bidang keahliannya.</p>
                </div>
                <div class="col-lg-4 mx-auto">
                    <i class="fas fa-user-check home-icon"></i>
                    <h5 class="my-2 mx-auto">1000++ SDM Tersertifikasi</h5>
                    <p class="text-muted">Daftar tenaga kerja profesional yang telah tersertifikasi oleh LSP Teknologi Digital. Siap untuk menjawab kebutuhan industri.</p>
                </div>
                </div>
            </div>
            
        </div>
    </section>


<!-- menampilkan list skema sertfikasi dengan limit menampilkan 3 skema -->
    <main>
        <div class="text-center col-lg-6 col-md-8 mx-auto">
            <h2>Daftar Skema Sertifikasi</h2>
        </div>
        <div class="row row-cols-1 row-cols-lg-3 mb-3 text-center">
            <!-- memanggil dari database dan ditampilkan-->
            <?php foreach ($skema as $s) : ?>
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal" style="font-size: 15px;"><?= $s['judul']; ?></h4>
                        </div>
                        <div class="card-body d-block">
                            <img  src="assets/<?= $s['gambar']; ?>" width="200" height="200" alt="...">
                            <ul class="list-unstyled mt-3 mb-4">
                                <li><?= $s['penjelasan']; ?></li>
                            </ul>
                            <button type="button" class="w-100 btn btn-lg btn-outline-primary" style="font-size: 15px;">Lihat Skema</button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

            <!-- mengarahkan ke halaman skema sertifikasi -->
            <section class="text-center container">
                <p>
                    <a href="<?= base_url('/skema'); ?>" class="btn btn-primary my-2">Lihat Skema Lainnya</a>
                </p>
            </section>
    </main>

    <!-- list testimoni -->
    <div class="py-5 my-5 text-center container marketing">
        <div class="text-center col-lg-6 col-md-8 mx-auto">
            <h2 class="my-3">Testimoni</h2>
        </div>

        <div class="row">
            <div class="col-lg-4 mt-3">
                <img class="bd-placeholder-img rounded-circle img-respon" width="140" height="140" src="assets/sergio-de-paula-c_GmwfHBDzk-unsplash.jpg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                </img>

                <h2>Testimoni 1</h2>
                <p>Sertifikasi ini sangat membantu untuk memiliki SDM ang kompeten sesuai dengan kebutuhan.</p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mt-3">
                <img class="bd-placeholder-img rounded-circle img-respon" width="140" height="140" src="assets/jake-nackos-IF9TK5Uy-KI-unsplash.jpg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                </img>

                <h2>Testimoni 2</h2>
                <p>Sertifikasi yang wajib dimiliki oleh para calon tenaga kerja.</p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mt-3">
                <img class="bd-placeholder-img rounded-circle img-respon" width="140" height="140" src="assets/kelly-sikkema-JN0SUcTOig0-unsplash.jpg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                </img>

                <h2>Testimoni 3</h2>
                <p>Sertifikasi ini dilakukan secara profesional.</p>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->

    </div>
</div>

<!-- menandai bagian akhir content yg akan ditampilkan melalui layout template -->
<?= $this->endSection(); ?>