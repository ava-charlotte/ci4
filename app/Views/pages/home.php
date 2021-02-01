<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
  <div>
    <ul>
      <?php foreach($persons as $key => $value): ?>
        <li>
          <p>Name: <?= $value->name ?></p> 
          <p>Description: <?= $value->description ?></p>
        </li>
      <?php endforeach ?>
    </ul>
  </div>
<?= $this->endSection() ?>