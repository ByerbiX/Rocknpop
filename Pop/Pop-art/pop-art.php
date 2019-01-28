<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-pop.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Accueil</title>
</head>
<body>

<div class="nav-icons">
    <div class="bloc"><p><a href="">Section Vinyle</a></p></div>
    <div><img class="painter-icon" src="../images/Pop-art/nav-icon.png" alt=""></div>
</div>

<ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" href="#">Accueil</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Forum</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Mon compte</a>
  </li>
</ul>


<?php 
require 'inc/db.php';
$req =$pdo->prepare("SELECT * FROM articles ORDER by id DESC");
$req->execute();
?>



  <div class="container">
    <div class="d-flex align-content-around flex-wrap">
          <?php while($res = $req->fetch(PDO::FETCH_OBJ)): ?>
          <div class="col-lg-4 col-md-5 col-sm-7 col-xs-12">
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
    </div>
  </div>















<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>