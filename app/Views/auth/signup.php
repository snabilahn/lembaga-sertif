<!-- memanggil dan menghubungkan layout template untuk tampilan yg telah dibuat -->
<?= $this->extend('layout/auth_template'); ?>

<!-- menandai bagian awal content yg akan ditampilkan melalui layout template -->
<?= $this->section('login'); ?>

<!-- Nested Row within Card Body -->
<div class="row align-self-center">
    <div class="col-lg">
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Daftar Akun</h1>
            </div>

            <form class="user" method="post" action="">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user mb-2" id="first_name" name="first_name" placeholder="First Name" value="" required>
                            <!--  -->
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user mb-2" id="last_name" name="last_name" placeholder="Last Name" value="" required>
                            <!--  -->
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control form-control-user mb-2" id="email" name="email" placeholder="Alamat Email" value="" required>
                    <!--  -->
                </div>
                <div class="form-group">
                    <input type="password" class="form-control form-control-user mb-2" id="password1" name="password1" placeholder="Password" required>
                    <!--  -->
                </div>
                <div class="form-group">
                    <input type="password" class="form-control form-control-user mb-2" id="password2" name="password2" placeholder="Ulangi Password" required>
                    <!--  -->
                </div>

                <div class="row mt-3">
                    <div class="col">
                        <div class="form-check text-start mb-2" style="color: #193b55;">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Saya menyetujui <span><a href="#" class="span-signup">Syarat dan Ketentuan</a></span> dan <span><a href="#" class="span-signup">Kebijakan Privasi</a></span> yang berlaku
                            </label>
                        </div>
                    </div>

                    <div class="d-grid gap-2 mt-3 mb-3">
                        <button type="submit" class="btn btn-primary" style="border-radius: 50px; font-weight:bold;">Daftar</button>
                    </div>

                    <hr>

                    <div class="text-center">
                        <p>Sudah punya akun? <span><a href="<?= base_url('/auth/login'); ?>" class="span-signup">Masuk di sini</a></span></p>
                    </div>
            </form>
        </div>
    </div>
</div>


<!-- menandai bagian akhir content yg akan ditampilkan melalui layout template -->
<?= $this->endSection(); ?>