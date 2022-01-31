<!-- memanggil dan menghubungkan layout template untuk tampilan yg telah dibuat -->
<?= $this->extend('layout/template'); ?>

<!-- menandai bagian awal content yg akan ditampilkan melalui layout template -->
<?= $this->section('content'); ?>

<!-- post data ketika form kirim pesan di submit -->
<?php
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $subjek = $_POST['subjek'];
    $pesan = $_POST['pesan'];

    echo '<script language="javascript">';
    echo 'alert("Pesan Terkirim!")';
    echo '</script>';
}
?>

<div class="container" style="padding: 100px 10px;">

    <!-- Maps lokasi -->
    <div class="col">
        <h2>Lokasi</h2>

        <div class="container iframe-container">
            <div class="embed-responsive-item embed-responsive-4by3 mt-2 mb-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.096206410216!2d110.3903453143262!3d-7.779623379341661!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a59c185939aeb%3A0x8f382451fe847e8e!2sLSP%20Teknologi%20Digital!5e0!3m2!1sen!2sid!4v1633441409836!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>

        <!-- form contact us -->
        <div class="row g-4 mt-3">
            <div class="col-sm-6">
                <h2>Contact Us</h2>
                <hr class="featurette-divider">
                <form action="" method="POST">
                    <div class="mb-3 row">
                        <div class="col">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" aria-label="Nama">
                        </div>
                        <div class="col">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" aria-label="Email" rows="3">
                        </div>
                        <div class="mb-3">
                            <label for="subjek" class="form-label"> <br> Subjek</label>
                            <input type="text" class="form-control" id="subjek" name="subjek" placeholder="Subjek">
                        </div>
                        <div class="mb-3">
                            <label for="pesan" class="form-label">Pesan</label>
                            <textarea class="form-control" id="pesan" name="pesan" rows="3" placeholder="Tuliskan pesan disini ..."></textarea>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary" value="submit" name="submit">Kirim</button>
                        </div>
                    </div>
                </form>
            </div>

            <!-- informasi kontak -->
            <div class="col-md-6">

                <h2>Lembaga Sertifikasi Profesi</h2>
                <hr class="featurette-divider">

                <ul class="fa-ul">
                    <li style="padding: 6px;">
                        <h7 class="text-muted"><span class="fa-li"><i class="fas fa-map-marked-alt fa-2x" style="font-size: 1.5rem;"></i></span> Pulogebang Indah Blok J11 No 34, Jakarta Timur</h7>
                    </li>
                    <li style="padding: 6px;">
                        <h7 class="text-muted"><span class="fa-li"><i class="fas fa-phone-square-alt fa-2x" style="font-size: 1.5rem;"></i></span>(0721) 666999</h7>
                    </li>
                    <li style="padding: 6px;">
                        <h7 class="text-muted"><span class="fa-li"><i class="fab fa-whatsapp fa-2x" style="font-size: 1.5rem;"></i></span>+6285329489247</h7>
                    </li>
                    <li style="padding: 6px;">
                        <h7 class="text-muted"><span class="fa-li"><i class="fas fa-envelope-open-text fa-2x" style="font-size: 1.5rem;"></i></span>info@lspdigital.id</h7>
                    </li>
                    <li style="padding: 6px;">
                        <h7 class="text-muted"><span class="fa-li"><i class="fab fa-instagram fa-2x" style="font-size: 1.5rem;"></i></span>lspdigital.id</h7>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</div>

<!-- menandai bagian akhir content yg akan ditampilkan melalui layout template -->
<?= $this->endSection(); ?>