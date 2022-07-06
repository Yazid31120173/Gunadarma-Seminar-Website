<?php $this->extend('layout/templates'); ?>

<?php $this->section('content'); ?>

<main class="page landing-page">
<section class="clean-block clean-form dark" id="contact">
    <div class="container">
        <div class="block-heading">
            <h2 id="purple">Submit Seminar</h2>
        </div>
        <form action="save_card" method="post">
            <?php csrf_field(); ?>
            <div class="mb-3">
            <label class="form-label" for="nama">Tema Seminar</label>
                <input class="form-control" type="text" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label class="form-label" for="periode">Periode</label>
                <input class="form-control" type="text" id="periode" name="periode" required>
            </div>
            <div class="mb-3">
                <label class="form-label" for="narasumber">Narasumber</label>
                <input class="form-control" type="text" id="narasumber" name="narasumber" required>
            </div>
            <div class="mb-3">
                <label class="form-label" for="mc">Mc</label>
                <input class="form-control" type="text" id="mc" name="mc" required></input>
            </div>
            <div class="mb-3">
                <label class="form-label" for="kontak">Kontak</label>
                <input class="form-control" type="text" id="kontak" name="kontak" required></input>
            </div>
            <div class="mb-3">
                <label class="form-label" for="deskripsi">Deskripsi</label>
                <textarea class="form-control" type="text" id="deskripsi" name="deskripsi" required></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label" for="kuota">Kuota</label>
                <input class="form-control" type="text" id="kuota" name="kuota" required></input>
            </div>
            <div class="mb-3">
                <label class="form-label" for="file">File</label>
                <input class="form-control" type="file" id="file" name="file" required></input>
            </div>
            <div class="mb-3">
                <label class="form-label" for="gambar">Gambar</label>
                <input class="form-control" type="file" id="gambar" name="gambar" required></input>
            </div>
            <div class="mb-3">
                <button class="btn" id="background" type="submit">Submit</button>
            </div>
        </form>
    </div>
</section>
</main>

<?php $this->endSection(); ?>