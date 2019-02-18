<?php 
if (session_status() === PHP_SESSION_NONE){
  session_start();
}
if (!isset($_SESSION['admin'])){
    header ('Location: ./accueil.php');
 }
?>
<?php require '../components/header.php'; ?>


<?php 

if(isset($_POST['submit'])) {
    require '../database/db.php';
    require '../components/class.upload.php';
    require '../components/functions.php';

    $titre = cleanString($_POST['titre']);
    $artiste = cleanString($_POST['artiste']);
    $album = cleanString($_POST['album']);
    $annee = cleanString($_POST['annee']);

    /*UPLOAD THUMB*/
    $thumb = new Upload($_FILES['thumb']);
    if ($thumb->uploaded) {
        $thumbsha1 = 'thumb_' . sha1(base64_encode(openssl_random_pseudo_bytes(30)));
        $thumb->file_new_name_body = $thumbsha1;
        $thumb->image_resize = true;
        $thumb->image_x = 300;
        $thumb->image_y = 300;
        $thumb->image_convert = 'jpg';
        $thumb->image_ratio_crop = true;
        $thumb->Process("../images/$artiste/$album/");
        $thumblink = "../images/$artiste/$album/$thumbsha1.jpg";
        if ($thumb->processed) {
            $thumb->Clean();
        }
    }

    /*UPLOAD MUSIQUE*/
    if(!is_dir("../musics/$artiste")){
        mkdir("../musics/$artiste", 0700);
    }
    if(!is_dir("../musics/$artiste/$album")){
        mkdir("../musics/$artiste/$album", 0700);
    }
    $uploaddir = "../musics/$artiste/$album/";
    $uploadfile = "$uploaddir" . cleanString($_FILES['music']['name']);


    echo '<pre>';
    if (move_uploaded_file($_FILES['music']['tmp_name'], $uploadfile)) {
        echo "Le fichier est valide, et a été téléchargé
           avec succès. Voici plus d'informations :\n";
    } else {
        echo "Attaque potentielle par téléchargement de fichiers.
          Voici plus d'informations :\n";
    }

    echo 'Voici quelques informations de débogage :';
    print_r($_FILES);

    echo '</pre>';
    /*REQUETE*/
    $req = $pdo->prepare('INSERT INTO musics SET titre = :titre, artiste = :artiste, album = :album, annee = :annee, link = :link, thumb = :thumb');
    $req->execute(array(
        ':titre' => $_POST['titre'],
        ':artiste' => $_POST['artiste'],
        ':album' => $_POST['album'],
        ':annee' => $_POST['annee'],
        ':link' => $uploadfile,
        ':thumb' => $thumblink,
    ));
    $req->closeCursor();

}

?>

<!-- FORMULAIRE -->
<form action="" method="POST" enctype="multipart/form-data" >
    <label for="">Titre</label>
    <input name="titre" type="text" value="Knockin' on Heaven's Door"><br><br>
    <label for="">Artiste</label>
    <input name="artiste" type="text" value="Guns & Roses"><br><br>
    <label for="">Album</label>
    <input name="album" type="text" value="Use your Illusion II"><br><br>
    <label for="">Année</label>
    <input name="annee" type="text" value="1991"><br><br>

    <label for="">Fichier :</label>
    <input name="music" type="file"><br><br>
    <label for="">Illustration :</label>
    <input name="thumb" type="file"><br><br>

    <input name="submit" type="submit" value="Valider">
</form>