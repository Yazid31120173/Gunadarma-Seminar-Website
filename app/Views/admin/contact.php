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
            <?php foreach($contact->getResultArray() as $row) : ?>
            <tr>
              <th scope="row"><?= $i++ ?></th>
              <td><?= $row['name']; ?></td>
              <td><?= $row['subject']; ?></td>
              <td><?= $row['email']; ?></td>
              <td><?= $row['message']; ?></td>
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