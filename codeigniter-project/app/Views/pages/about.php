<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<div class="container">
  <div class="row">
    <div class="col">
      <div class="">
      <h2>About</h2>
        <p>
          <?php foreach ($alamat as $a): ?>
            <?php echo $a ?>,
          <?php endforeach; ?>
        </p>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>