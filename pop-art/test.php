<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="test.css">
    <title>Document</title>
</head>
<body>


<h1>Le POP-ART</h1>
<h2>Qu'est ce que le Pop-Art</h2>
<p>Le Pop art est un mouvement artistique né dans les années 50. Le concept du Pop art est représenté par les artistes dans l'attitude donnée à l'oeuvre plutôt que par l'oeuvre d'art elle-même.</p>






<?php 
require 'inc/db.php';
$req =$pdo->prepare("SELECT * FROM articles ORDER by id DESC");
$req->execute();
?>


<?php while($res = $req->fetch(PDO::FETCH_OBJ)): ?>
<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <div class="hovereffect">
        <img class="img-responsive" src="<?= $res->painting; ?>" alt="">
            <div class="overlay">
                <h2><?= $res->artist_presentation; ?></h2>
				<p>
					<a href="#"><?= $res->artist_name; ?></a>
				</p>
            </div>
    </div>
</div>
<?php endwhile; ?>



<!--
<div class="container">
  <header>
    <p>Compatible with greater then ie7 and all modern browser</p>
    <h1>Customized Upload button</h1>
  </header>
  
  <div class="upload-btn">
    <span>No file selected</span>
    <label for="file-upload">Browse</label>
    <input type="file" id="file-upload" id="upload">
  </div>
  <div class="view-img">
    <img src="" alt="">
  </div>
</div>
<script src="inc/jQuery.js"></script>
<script type="text/javascript">
$('.upload-btn input').on('change', function(){
  $(this).parent().find('span').html($(this).val());
});
</script>
-->
</body>
</html>

