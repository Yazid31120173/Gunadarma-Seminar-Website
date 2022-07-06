<?php $this->extend('layout/templates'); ?>

<?php $this->section('content'); ?>

<main class="page landing-page">
<div class="container" id="adminHome">
	<br><br><br>
	  <a class="d-grid gap-2" href="admin/contact" id="card">
	  	<button class="btn" id="background" type="button">Daftar Kontak</button>
	  </a><br>
	  <a class="d-grid gap-2" href="admin/card" id="card">
	  	<button class="btn" id="background" type="button">Form Isi Seminar</button>
	  </a>				
</div>
</main>

<?php $this->endSection(); ?>