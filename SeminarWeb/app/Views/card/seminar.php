<?php $this->extend('layout/templates'); ?>

<?php $this->section('content'); ?>

    <main class="page landing-page">
        <section class="clean-block clean-form dark">
            <div class="container" >
                <div class="block-heading">
                    <h2 id="purple">Seminar</h2>
                    <p>Bangun karirmu sebagai developer profesional</p>
                </div>

                <!-- Start Seminar List -->
                <!-- $card as $row ('SELECT' ANOTHER WAY -> LOOK AT THE CONTROLLER SHOWCARD) -->
                <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php foreach($card->getResultArray() as $row): ?>
                  <div class="col">
                    <div class="card h-100">
                        <a href="/ShowCard/detail/<?= $row['id']; ?>">
                            <img src="/assets/img/scenery/cover/<?= $row['gambar']; ?>" class="card-img-top">
                        </a>
                        <div class="card-body">
                            <a href="/ShowCard/detail/<?= $row['id']; ?>" id="card">
                                <h4 class="card-title"><strong><?= $row['nama']; ?></strong></h4>
                                <p class="card-title">Pembicara : <?= $row['narasumber']; ?></p>
                            </a>
                        </div>
                        <div class="card-footer row">
                            <div class="col-lg text-lg-left">
                                <small class="text-muted">Periode : <?= $row['periode']; ?></small>
                            </div>
                            <div class="col-lg-auto text-lg-right">
                                <small class="text-muted">Maks Kuota : <?= $row['kuota']; ?></small>
                            </div>
                        </div>
                        <a href="/ShowCard/detail/<?= $row['id']; ?>" class="btn" id="background">Read More</a>
                    </div>
                  </div>
                <?php endforeach; ?> 
                </div>
                <!-- End Seminar List -->

        </section>
    </main>

<?php $this->endSection(); ?>