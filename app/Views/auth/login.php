<!-- memanggil dan menghubungkan layout template untuk tampilan yg telah dibuat -->
<?= $this->extend('layout/auth_template'); ?>

<!-- menandai bagian awal content yg akan ditampilkan melalui layout template -->
<?= $this->section('login'); ?>

<!-- Nested Row within Card Body -->
<div class="row align-self-center">
    <div class="col-lg">
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Masuk Akun</h1>
            </div>

            <form class="user" method="post" action="">
                <div class="form-group">
                    <input type="email" class="form-control form-control-user mb-2" id="email" name="email" placeholder="Masukkan Alamat Email..." value="" required>

                </div>
                <div class="password-field form-group has-feedback-right">
                    <input type="password" class="form-control form-control-user mb-2" id="password" name="password" placeholder="Masukkan Password" required>
                    <!-- <i><span id="visibilityBtn" class="material-icons">visibility</span></i> -->

                </div>

                <!-- <div class="row mt-3"> -->

                <div class="d-flex mb-2">
                    <div class="me-auto">
                        <div class="form-check" style="color: #193b55;">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label login-check" for="flexCheckDefault">
                                Ingat Saya
                            </label>
                        </div>
                    </div>
                    <a class="small forgot-psw login-check" href="#">Lupa Password</a>
                </div>

                <!-- </div> -->

                <div class="d-grid gap-2 mt-4">
                    <button type="submit" class="btn btn-primary btn-login">Masuk</button>
                    <a href="<?= base_url('/auth/signup'); ?>" class="btn btn-primary" style="border-radius: 50px;" type="button">Daftar Akun</a>
                </div>

                <div class="text-center text-muted mt-3">
                    <p>- atau masuk dengan -</p>
                </div>
                <div class="text-center">
                    <a href="#">
                        <img src="https://img.icons8.com/color/50/000000/facebook-new.png" />
                    </a>
                    <a href="#">
                        <img src="https://img.icons8.com/color/50/000000/twitter-circled--v1.png" />
                    </a>
                    <a href="#">
                        <img src="https://img.icons8.com/color/50/000000/google-plus--v1.png" />
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- menandai bagian akhir content yg akan ditampilkan melalui layout template -->
<?= $this->endSection(); ?>