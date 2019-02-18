<div class="songs-module">
    <?php include '../controllers/controller-song.php'; ?>
    <link rel="stylesheet" href="../css/songs.css">

    <h2 class="d-100">Tracklist <?= isset($albumTitre) ? $albumTitre : "" ?></h2><br>

<!-- LE $x est là pour mettre en place le data-track afin de lancer la chanson suivante -->
    <?php 
    $x = 0;
    foreach($songs as $song): ?>
        <h2 class="dynamicSongs" 
          data-track=<?=$x?>
          data-link="<?=$song['link']?>"
          data-thumb="<?=$song['thumb']?>"
          data-titre="<?=$song['titre']?>"
          data-artiste="<?=$song['artiste']?>"
          data-album="<?=$song['album']?>"
          ><?=$song['titre']?></h2>
          
    <?php
$x = $x + 1;
endforeach; ?>
</div>