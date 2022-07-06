<?php $this->extend('layout/templates'); ?>

<?php $this->section('content'); ?>
<main class="page landing-page" style="margin-top: 30px;">
  <div class="container">
    <div class="row">
      <div class="col">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Num</th>
              <th scope="col">Name</th>
              <th scope="col">Subject</th>
              <th scope="col">Email</th>
              <th scope="col">Message</th>
            </tr>
          </thead>
          <tbody>
            <?php $i = 1; ?>
            <?php foreach($daftar->getResultArray() as $row) : ?>
            <tr>
              <th scope="row"><?= $i++ ?></th>
              <td><?= $row['nama_seminar']; ?></td>
              <td><?= $row['nama_pendaftar']; ?></td>
              <td><?= $row['no_pendaftar']; ?></td>
              <td><?= $row['email_pendaftar']; ?></td>
              <td><?= $row['instansi_pendaftar']; ?></td>
              <td><?= $row['jurusan_pendaftar']; ?></td>
              <td><?= $row['status_pendaftar']; ?></td>
            </tr>
          <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</main>
<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>
<?php $this->endSection(); ?>