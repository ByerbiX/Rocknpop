<div class="albums-module">
  <?php require '../controllers/controller-albums.php'; ?>
  <link rel="stylesheet" href="../css/albums.css">

  <!-- Expression ternaire : test ? valeur_true : valeur_false -->
  <h2 class="d-100">Albums <?= isset($artisteTitre) ? $artisteTitre : "" ?></h2>


    <?php foreach($albums as $album): ?>
        <a data-target="songs" data-id="<?= $album['id']?>" class="dynamicLinks artist" ><img src="<?= $album['thumb']?>" alt=""></a>
    <?php endforeach; ?>
</div>