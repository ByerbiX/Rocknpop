<div class="artistes-module">
    <link rel="stylesheet" href="../css/artistes.css">
    <?php require '../controllers/controller-artistes.php'; ?>

    <h2 class="d-100">Artistes</h2>
    <?php 
    foreach($artistes as $artiste): ?>
        <a data-target="albums" data-id="<?= $artiste['id']?>" class="dynamicLinks artist" ><?=$artiste['artiste']?></a>
    <?php 
    endforeach;
    ?>
</div>