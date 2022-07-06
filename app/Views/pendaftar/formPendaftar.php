<?php $this->extend('layout/templates'); ?>

<?php $this->section('content'); ?>

<main class="page landing-page">
<section class="clean-block clean-form dark" id="contact">
    <div class="container">
        <div class="block-heading">
            <h2 id="purple">Daftar Seminar Seminar</h2>
        </div>
        <form action="save_pendaftar" method="post" enctype="multipart/form-data">
            <?php csrf_field(); ?>

            <div class="mb-3">
                <label class="form-label" for="nama_seminar">Nama Seminar</label>
                <input class="form-control" type="text" id="nama_seminar" name="nama_seminar" required
                value="Nama Seminar">
            </div>
            <div class="mb-3">
                <label class="form-label" for="nama_pendaftar">Nama Lengkap</label>
                <input class="form-control" type="text" id="nama_pendaftar" name="nama_pendaftar" autofocus required>
            </div>
            <div class="mb-3">
                <label class="form-label" for="no_pendaftar">No. Telp (Whatsapp)</label>
                <input class="form-control" type="text" id="no_pendaftar" name="no_pendaftar" required>
            </div>
            <div class="mb-3">
                <label class="form-label" for="email_pendaftar">Email</label>
                <input class="form-control" type="email" id="email_pendaftar" name="email_pendaftar" required></input>
            </div>
            <div class="mb-3">
                <label class="form-label" for="instansi_pendaftar">Instansi</label>
                <input class="form-control" type="text" id="instansi_pendaftar" name="instansi_pendaftar" required></input>
            </div>
            <div class="mb-3">
                <label class="form-label" for="jurusan_pendaftar">Jurusan</label>
                <input class="form-control" type="text" id="jurusan_pendaftar" name="jurusan_pendaftar" required></input>
            </div>
            <div class="mb-3">
                <label class="form-label" for="status_pendaftar">Status</label>
                <input class="form-control" type="text" id="status_pendaftar" name="status_pendaftar" required></input>
            </div>
            
            <div class="mb-3">
                <button class="btn" id="background" type="submit" name="daftar">Daftar</button>
            </div>
        </form>
    </div>
</section>
</main>


<?php $this->endSection(); ?>