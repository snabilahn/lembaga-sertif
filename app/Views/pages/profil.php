<!-- memanggil dan menghubungkan layout template untuk tampilan yg telah dibuat -->
<?= $this->extend('layout/template'); ?>

<!-- menandai bagian awal content yg akan ditampilkan melalui layout template -->
<?= $this->section('content'); ?>

<div class="container" style="padding: 100px 10px;">
    <!-- sidebar isi dari halaman profil -->
    <div class="row">
        <nav class="col-sm-3" id="navbar-example3">
            <ul class="navbar sticky-top navbar-light bg-light flex-column align-items-stretch p-3" role="tablist">
                <a class="nav-link" href="#section1">INTRO</a>
                <a class="nav-link" href="#section2">DUKUNGAN ASOSIASI PROFESI DAN ASOSIASI INDUSTRI</a>
                <a class="nav-link" href="#section3">LEMBAGA SERTIFIKASI PROFESI SEBAGAI SERTIFIKATOR</a>
                <a class="nav-link" href="#section4">PENGENDALIAN LSP</a>
                <a class="nav-link" href="#section5">RUANG LINGKUP SKEMA YANG TERLISENSI BNSP</a>
                <a class="nav-link" href="#section6">PENAMBAHAN RUANG LINGKUP</a>
                <a class="nav-link" href="#section7">MITRA KERJA</a>
                <a class="nav-link" href="#section8">LEMBAGA SERTIFIKASI PROFESI LAINNYA</a>
            </ul>
        </nav>

        <!-- isi konten halaman profil -->
        <div class="col-sm-9 profile-content" data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-offset="0" tabindex="0">
            <div id="section1">
                <h2>Lembaga Sertifikasi Profesi</h2>
                <img class="img-profil-page mx-auto" src="<?php echo base_url('assets/profil1.jpg'); ?>" alt="...">
                <p><strong>Lembaga Sertifikasi Profesi Teknologi Digital</strong>
                    atau disingkat LSP Teknologi Digital (LSP TD) mendapatkan lisensi dari Badan Nasional Sertifikasi Profesi (BNSP) untuk melakukan proses Sertifikasi di bidang Teknologi dan Informasi. Tugas pokok dan fungsi dari Lembaga Sertifikasi yang penting dalam pengembangan Sumber Daya Manusia menjadikan LSP TD harus lebih profesional dan independen dalam melakukan proses sertifikasi. Untuk memastikan Tenaga kerja Indonesia Kompeten pada bidangnya dan berdaya saing global pada industri Teknologi dan Informasi. </p>
            </div>
            <div id="section2">
                <h2>Dukungan Asosiasi Profesi dan Asosiasi Industri</h2>
                <p>Mendapat dukungan dari Asosiasi profesi dan Asosiasi Industri, serta dukungan dari regulator Kementrian Komunikasi dan Informatika (Kominfo) menjadikan Kualitas dan kepercayaan masyarakat merupakan prioritas utama kami dalam melakukan proses sertifikasi. Dukungan dari Asesor baik dari kalangan Praktisi maupun Akademisi, serta kerjasama dengan Lembaga Pelatihan dan Perusahaan merupakan modal utama LSP TD untuk bersinergi dalam menghasilkan SDM yang memiliki kompetensi, diakui serta beretika sesuai dengan kebutuhan Dunia usaha dan Dunia Industri LSP TD juga terus melakukan kerjasama dengan pemangku kepentingan agar Sertifikasi betul-betul menjadi solusi bagi masalah SDM di Indonesia.</p>
                <p>Kegiatan yang di lakukan LSP TD antara lain adalah Sertifikasi SDM, pelatihan Asesor Kompetensi, Pembentukan TUK Mandiri, sosialisasi SKKNI dan penyelarasan kurikulum atau silabus pada dunia pendidikan dan pelatihan.</p>
            </div>
            <div id="section3">
                <h2>Lembaga Sertifikasi Profesi sebagai Sertifikator</h2>
                <h4>Tugas dan Fungsi</h4>
                <ul>
                    <li>Membuat MUK atau Materi uji kompetensi yang sesuai dengan karakteristik peserta</li>
                    <li>Menyediakan Asesor Kompetensi yang bertugas untuk melaksanakan Asesmen </li>
                    <li>Menyusun kualifikasi atau okupasi sesuai kubutuhan industri</li>
                    <li>Membentuk Tempat Uji Kompetensi atau TUK</li>
                    <li>Menjaga Mutu dari Asesor Kompetensi dan TUK.</li>
                    <li>Mengembangkan Skema Sertifikasi</li>
                </ul>
                <h4>Wewenang</h4>
                <ul>
                    <li>Menetapkan standar biaya uji kompetensi.</li>
                    <li>Menerbitkan sertifikat kompetensi.</li>
                    <li>Mencabut/membatalkan keputusan sertifikasi.</li>
                    <li>Menetapkan dan memverifikasi TUK baik TUK Sewaktu/Mandiri/Tempat Kerja.</li>
                    <li>Memberikan sanksi kepada asesor maupun TUK bila terbuktimelanggar aturan.</li>
                    <li>Mengusulkan standar kompetensi baru sesuai kebutuhan atau permintaan</li>
                </ul>
            </div>

            <div id="section4">
                <h2>Pengendalian LSP</h2>
                <p>Lembaga Sertifikasi Profesi memiliki tugas dalam proses pengendalian. Kinerja dari Lembaga Sertifikasi Profesi secara periodik melalui laporan kegiatan Surveilen dan monitoring baik visitasi maupu online. LSP yang ketika di audit oleh BNSP melakukan pelanggaran terhadap ketentuan dan pedoman akan dikenakan sanksi dari pemberitahuan tertulis sampai dengan dicabutnya lisensi. Sementara pemeliharaa pemegang sertifikat dipantau melalui laporan pengguna jasa dalam hal ini adalah Inustri yang menggunakan jasa sertifikasi atau pemegang sertifikat.</p>
            </div>
            <div id="section5">
                <h2>Ruang Lingkup Skema yang Terlisensi BNSP</h2>
                <p>Ruang lingkup skema sertifikasi LSP Teknologi Digital antara lain:</p>
                <ul>
                    <li>NETWORK, INFRASTRUCTURE, IOT AND SERVICES</li>
                    <li>SOFTWARE DEVELOPMENT AND DATA SCIENCE</li>
                    <li>MULTIMEDIA AND OFFICE</li>
                    <li>PROJECT MANAGEMENT AND QUALITY.</li>
                    <li>DIGITAL MARKETING AND IT FUNDAMENTAL</li>
                </ul>
            </div>
            <div id="section6">
                <h2>Penambahan Ruang Lingkup</h2>
                <p>LSP Teknologi Digital juga mencanangkan penambahan ruang lingkup sertifikasi, sebagai penyesuaian terhadap kebutuhan yang terus berubah dan bertambah. Ada beberapa skema sertifikasi yang akan di kembangkan yaitu</p>
                <ul>
                    <li>Social Media Specialyst</li>
                    <li>Content Creator</li>
                    <li>Digital Marketing Manager</li>
                    <li>PTeknisi HP</li>
                    <li>Fiber Optik</li>
                    <li>Robot Engineer</li>
                    <li>Deputy ICT PM</li>
                    <li>Cyber Security</li>
                </ul>
            </div>
            <div id="section7">
                <h2>Mitra Kerja</h2>
                <p>Sebagai lembaga yang bertanggung jawab untuk melaksanakan serifikasi di bidang IT, maka LSP Teknologi Digital juga di dukung oleh banyak mitra kerja agar visi misi lembaga dapat terwujud dan mendapat kepercayaan dari masyarakat.</p>
                <h4>Lembaga Pendidikan Profesi</h4>
                <ul>
                    <li>LPP Enter Pangkalanbun</li>
                    <li>LKP Gen Komputer Sampit</li>
                    <li>Google School Indonesia Bekasi</li>
                    <li>Alfabank Jogja</li>
                    <li>Sertifikasiku Jakarta</li>
                    <li>ITECH Medan</li>
                    <li>LKP Widya Palembang</li>
                </ul>
                <h4>Sekolah Menengah Kejuruan</h4>
                <ul>
                    <li>SMK Muhammadiya Malang</li>
                    <li>SMK Said Naum Jakarta</li>
                    <li>SMK Infokom Bogor</li>
                    <li>SMKN 2 Jakarta</li>
                    <li>SMKN 1 Nabire</li>
                </ul>
                <h4>Konsultan Sertifikasi</h4>
                <ul>
                    <li>Indonesia Kompeten</li>
                    <li>Lembaga Sertifikasi ID</li>
                    <li>Lembaga Sertifikasi COM</li>
                    <li>Sertifikasi Digital Marketing</li>
                </ul>
            </div>
            <div id="section8">
                <h2>Lembaga Sertifikasi Profesi Lainnya</h2>
                <p>Selain bidang TIK ada banyak lembaga sertifikasi lainnya yang telah terlisensi oleh BNSP. Antara lain bidang pariwisata, akuntansi, administrasi perkantoran, pemasaran, perbankan, perkebunan, pertambangan, kehutanan, koperasi, musik dan masih banyak lainnya. LSP juga ada di SMK dan Sekolah tinggi vokasi</p>
            </div>
        </div>
    </div>
</div>
</div>

<!-- menandai bagian akhir content yg akan ditampilkan melalui layout template -->
<?= $this->endSection(); ?>