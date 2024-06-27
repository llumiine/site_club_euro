<?php
require_once('config.php');
if (isset($_POST['filmvf']) && isset($_POST['filmvo']) && isset($_POST['affiche']) && isset($_POST['annee']) && isset($_POST['realisateur']) && isset($_POST['duree']) && isset($_POST['lienvideo']) && isset($_POST['synopsisvf']) && isset($_POST['synopsisvo']) && isset($_POST['Pays']) && isset($_POST['genre'])) {
    $filmvf = addslashes($_POST['filmvf']);
    $filmvo = addslashes($_POST['filmvo']);
    $affiche = addslashes($_POST['affiche']);
    $annee = addslashes($_POST['annee']);
    $realisateur = addslashes($_POST['realisateur']);
    $duree = addslashes($_POST['duree']);
    $lienvideo = addslashes($_POST['lienvideo']);
    $synopsisvf = addslashes($_POST['synopsisvf']);
    $synopsisvo = addslashes($_POST['synopsisvo']);
    $Pays = addslashes($_POST['Pays']);
    $genre = $_POST['genre'];
    //echo '"'. $genre.'";
    $sql = "INSERT INTO film(titreVO, titreVF, annee, realisateur, duree	,affiche, lienVideo, synopsisvo, synopsisvf, idGenre, idPays	
    ) VALUES ";
    //$sql .= '("$filmvo","$filmvf","$annee","$realisateur","$duree","$affiche","$lienvideo","$synopsisvo","$synopsisvf","2", "$Pays")';
    $sql .= "('$filmvo','$filmvf','$annee','$realisateur','$duree','$affiche','$lienvideo','$synopsisvo','$synopsisvf','$genre', '$Pays')";
    // Préparation de la requête
    $requete = $bdd->prepare($sql);
    // Exécution de la requête
    $requete->execute();
}
function affiche_annee()
{
    $an = date("Y");
    for ($i = 1895; $i <= $an; $i++) {
        if ($i == 1990)
            echo "<option value=" . $i . " selected=selected>" . $i . "</option>";
        else
            echo "<option  value=" . $i . ">" . $i . "</option>";
    }
}


$sql = "SELECT idPays,nomPays FROM pays ORDER BY nomPays";
$requete = $bdd->prepare($sql);
$requete->execute();
while ($ligne = $requete->fetch()) {
    $result[] = $ligne;
}
$sql = "SELECT idGenre,nomGenre FROM genre ORDER BY nomGenre ";
$requete = $bdd->prepare($sql);
$requete->execute();
while ($ligne = $requete->fetch()) {
    $result1[] = $ligne;
}
$sql = "SELECT idGenre,nomGenre FROM genre ORDER BY nomGenre ";
$requete = $bdd->prepare($sql);
$requete->execute();
while ($ligne = $requete->fetch()) {
    $result1[] = $ligne;
}
//print_r($result);

//upload un fichier 

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["affiche"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["affiche"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["affiche"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["affiche"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["affiche"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}

?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">


<head>
    <meta charset="UTF-8">
    <title>Club de cinéma européen</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="film.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">


</head>
<header>
    <nav class="navbar navbar-light bg-light" id="nav">
        <a class="navbar-brand">Navbar</a>
        <form class="form-inline">

            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Inscription</button>
        </form>
    </nav>
</header>

<body>

    <img class="center" src="film.jpeg" width="2000" height="200">
    <section id=timeline>
        <h1>Club de cinéma européen</h1>
        <p class="leader">ADMINS</p>

        <form method="post" action="film.php" enctype="multipart/form-data">
            <table class="table table-striped">
                <thead>

                </thead>
                <tbody>


                    <tr>
                        <td>Titre film VF</td>
                        <td>
                        </td>
                        <td>
                            <input type="text" name="filmvf">
                        </td>

                    </tr>
                    <tr>
                        <td>Titre film VO</td>
                        <td>
                        </td>
                        <td>
                            <input type="text" name="filmvo">
                        </td>

                    </tr>
                    <tr>
                        <td>Affiche</td>
                        <td></td>
                        <td>
                            <input type="file" name="affiche" id="affiche">
                            <input type="submit" value="Upload Image" name="submit">
                        </td>

                    </tr>
                    <tr>
                        <td>Année</td>
                        <td>
                        </td>
                        <td>
                            <select class="form-select" aria-label="Default select example" name="annee">
                                <?php
                                affiche_annee();
                                ?>
                            </select>
                        </td>


                    </tr>
                    <tr>
                        <td>Pays</td>
                        <td>
                        </td>
                        <td>
                            <select class="form-select" aria-label="Default select example" name="Pays">
                                <?php
                                for ($i = 0; $i < count($result); $i++) {
                                    echo '<option  value="' . $result[$i]["idPays"] . '">' . $result[$i]["nomPays"] . '</option>';
                                }

                                ?>
                            </select>
                        </td>
                    <tr>
                        <td>Genre</td>
                        <td>
                        </td>
                        <td>
                            <select class="form-select" aria-label="Default select example" name="genre">
                                <?php
                                for ($i = 0; $i < count($result1); $i++) {
                                    echo '<option  value="' . $result1[$i]["idGenre"] . '">' . $result1[$i]["nomGenre"] . '</option>';
                                }

                                ?>
                            </select>
                        </td>

                    <tr>
                        <td>Réalisateur </td>
                        <td>
                        </td>
                        <td>
                            <input type="text" name="realisateur">
                        </td>

                    </tr>
                    <tr>
                        <td>Durée</td>
                        <td>
                        </td>
                        <td>
                            <input type="text" name="duree">
                        </td>

                    </tr>


                    <tr>
                        <td>Lien Vidéo</td>
                        <td>
                        </td>
                        <td>
                            <input type="text" name="lienvideo">
                        </td>

                    </tr>
                    <tr>
                        <td>Synopsis VF</td>
                        <td>
                        </td>
                        <td>
                            <input type="text" class="synopsisvf" name="synopsisvf">
                        </td>

                    </tr>
                    <tr>
                        <td>Synopsis VO</td>
                        <td>
                        </td>
                        <td>
                            <input type="text" class="synopsisvo" name="synopsisvo">
                        </td>

                    </tr>



                </tbody>
            </table>
            </div>
            <input type="reset" value="Réinitialiser le formulaire">

            <input type="submit" value="Créer le film">
        </form>

</body>

</html>