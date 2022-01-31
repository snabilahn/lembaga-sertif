<!-- memanggil dan menghubungkan layout template untuk tampilan yg telah dibuat -->
<?= $this->extend('layout/template'); ?>

<!-- menandai bagian awal content yg akan ditampilkan melalui layout template -->
<?= $this->section('content'); ?>

<div class="cotainer" style="padding: 100px 10px;">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <!-- memanggil dari database dan ditampilkan-->
        <?php foreach ($media as $m) : ?>
            <div class="col">

                <div class="card shadow-sm">
                    <img src="assets/<?= $m['gambar']; ?>" class="card-img-top img-responsive" alt="...">
                    <div class="card-body">
                        <p class="card-text"><?= $m['judul']; ?></p>
                        <div class="d-flex justify-content-between align-items-center">
                        </div>
                    </div>
                </div>

            </div>
        <?php endforeach; ?>

    </div>
</div>

<!-- menandai bagian akhir content yg akan ditampilkan melalui layout template -->
<?= $this->endSection(); ?>