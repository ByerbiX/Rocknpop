<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="../../ckeditor/ckeditor.js"></script>
    <link rel="stylesheet" href="./style-pop.css">
    <title>Admin</title>
</head>
<body>

<?php 
require 'inc/db.php';
if (!empty($_POST)) {
    $errors = array();
    $extensions = array('.png', '.jpg', '.jpeg');
    $extension = strrchr($_FILES['painting']['name'], '.');
    if(!in_array($extension, $extensions)) {

       $errors['painting'] = "Seul les extentions de type .jpg, .jpeg, .png sont autorisés";
    }

    if(empty($_POST['artist_name']) AND empty($_POST['artist_presentation']) AND empty($_POST['artist_article']) AND empty($_FILES['painting'])) {
        
        $errors['empty'] = "Veuillez remplir tout les champs";
        
    }
       
    if(isset($_POST['artist_name'], $_POST['artist_presentation'], $_POST['artist_article'], $_FILES['painting']) AND empty($errors)) {
    
        $dossier = '../images/';
        $fichier = basename($_FILES['painting']['name']);
        if(!empty($_POST['artist_name']) AND !empty($_POST['artist_presentation']) AND move_uploaded_file($_FILES['painting']['tmp_name'], $dossier . $fichier)) {
            $req = $pdo->prepare('INSERT INTO articles SET artist_name = ?, artist_presentation = ?, artist_article = ?, painting = ?');
            $req->execute([$_POST['artist_name'], $_POST['artist_presentation'], $_POST['artist_article'], $dossier . $fichier]);
            $_SESSION['flash']['success'] = 'Votre article a bien été posté';
            header('Location: admin.php');
        } 
    }
}
?>

<h1 class="title-2">Rédiger un nouvel article</h1>

<?php if(!empty($errors)): ?>
<div class="alert alert-danger">
    <ul>
    <?php foreach($errors as $error): ?>
        <li><?= $error; ?></li>
    <?php endforeach; ?>
    </ul>
</div>
<?php endif; ?>

<form action="#" method="POST" class="news-create" enctype="multipart/form-data">

    <label for="artist_name">Nom de l'artiste</label><br>
    <input type="text" name="artist_name"><br>

    <label for="artist_presentation">Présentation de l'oeuvre</label><br>
    <textarea name="artist_presentation"></textarea><br>

    <label for="painting">Tableau</label><br>
    <input type="file" name="painting"><br>

    <textarea name="artist_article" id="editor1" rows="10" cols="80"></textarea>

<button type="submit" class="btn-primary">Envoyer</button>

</form>
    
</body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<script>
// Replace the <textarea id="editor1"> with a CKEditor
// instance, using default configuration.
CKEDITOR.replace( 'editor1' );
</script>