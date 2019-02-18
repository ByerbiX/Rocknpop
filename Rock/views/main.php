<?php 
include "../components/header.php";
if(session_status() === PHP_SESSION_NONE) {
	session_start();
}
?>
<!-- c'est ici que je vais appeler mes pages -->
<div class="container">

	<div class="accueil-module">
		<h2 class="d-100">Découverte aléatoire</h2>
		<?php
		require '../controllers/controller-accueil.php';
		for($i = 0; $i < 3; $i++) : 
		$music = $musics[$i];
		?>
		<div>
			<h3><?= $music['titre'] ?></h3>
			<a data-target="songs" data-id="<?=$music['id']?>" class="dynamicLinks"><img src="<?= $music['thumb'] ?>" alt=""></a>
		</div>
		<?php endfor;?>
	</div>

</div>

<?php
include "../components/footer.php";
?>