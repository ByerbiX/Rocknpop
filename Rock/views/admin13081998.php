<?php

  if(session_status() === PHP_SESSION_NONE){
    session_start();
  }
  if(isset($_SESSION['admin'])){
    header ('Location: ./admin.php');
 }
?>

<?php require '../components/header.php'; ?>

<?php
// echo(password_hash('admin13081998', PASSWORD_BCRYPT));
if(isset($_POST['submit'])){
  // Je crée mon tableau d'erreurs
  $errors = array();

  if(empty($_POST['login'])){
    // J'ajoute une clé 'login' à ce tableau d'erreurs dont la valeur est 'le login est vide'
    $errors['login'] = 'Le login est vide';
  }

  if(empty($_POST['password'])){
    // J'ajoute une clé 'password' à ce tableau d'erreurs dont la valeur est 'le mot de passe est vide'
    $errors['password'] = 'le mot de passe est vide';
  }

  if(empty($errors)){
    require '../database/db.php';
    $req = $pdo->prepare('SELECT * FROM `admin` WHERE `login` = :login');
    $req->execute(array(
        ':login' => $_POST['login']
    ));
    $admin = $req->fetch();
    $req->closeCursor();
    if($admin == FALSE){
      header('Location: ./admin13081998.php');
     
    }
    elseif(password_verify($_POST['password'], $admin['password'])){
      $_SESSION['admin'] = $admin;
      header('Location: ./admin');
     
    } else {
      header('Location: ./admin13081998.php');
    }
  }

}

?>


<div class="container d-flex justify-content-center">
  <form class="col-6" method="POST">
    <div class="form-group">
      <label for="login" class="text-light">Identifiant</label>
      <input name="login" type="text" class="form-control" id="login"  placeholder="Identifiant">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1" class="text-light">Mot de passe</label>
      <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>


<?php require '../components/footer.php'; ?>