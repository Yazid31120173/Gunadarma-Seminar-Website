<?php $this->extend('layout/templates'); ?>

<?php $this->section('content'); ?>

<main class="page landing-page">
        <section class="clean-block clean-form dark">
            <div class="container" >
            	<div class="block-heading">
                    <h2 id="purple">Download</h2>
                    <p>Materi download dari setiap seminar</p>
                </div>
				<?php foreach($card->getResultArray() as $row): ?>
					<div class="card mb-3" style="max-width: 100%;">
					  <div class="row g-0">
					    <div class="col-md-4">
					      <img src="/assets/img/scenery/cover/<?= $row['gambar']; ?>" class="img-fluid rounded-start">
					    </div>
					    <div class="col-md-8">
					      <div class="card-body">
					        <h3 class="card-title"><?= $row['nama']; ?></h3>
					        <p class="card-title">Pembicara : <?= $row['narasumber']; ?></p>
					        <br><br><br><br>
					        <a href="/ShowCard/materi/<?= $row['id']; ?>" class="btn" id="background">Download Materi</a>
					      </div>
					    </div>
					  </div>
					</div>
				<?php endforeach; ?>
			</div>
		</section>
</main>


<?php $this->endSection(); ?>