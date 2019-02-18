<div class="annees-module">
<link rel="stylesheet" href="../../Accueil/annees.css">
<?php require "../controllers/controller-annees.php"; ?>

    <?php foreach($annees as $annee): ?>
          <a annee="true" data-target="albums" data-id="<?= $annee['id']?>" class="dynamicLinks artist" ><?= $annee['annee']?></a>
    <?php endforeach; ?>

</div>