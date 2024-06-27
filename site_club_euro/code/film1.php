<?php
//session_start();
//if(!isset($_SESSION["idpers"])) {
//header('Location: index.php');
//}

require_once('config.php');
if (
    isset($_POST['filmvf']) && isset($_POST['filmvo'])
    && isset($_POST['annee'])
    && isset($_POST['realisateur'])
    && isset($_POST['duree'])
    && isset($_POST['lienvideoAlloCine'])
    && isset($_POST['lienIMDB'])
    && isset($_POST['synopsisvf'])
    && isset($_POST['synopsisvo'])
) {

    $filmvf = addslashes($_POST['filmvf']);
    $filmvo = addslashes($_POST['filmvo']);
    $affiche = addslashes($_FILES["affiche"]["name"]);
    $annee = addslashes($_POST['annee']);
    $realisateur = addslashes($_POST['realisateur']);
    $duree = addslashes($_POST['duree']);
    $lienvideoAlloCine = addslashes($_POST['lienvideoAlloCine']);
    $lienIMDB = addslashes($_POST['lienIMDB']);
    $synopsisvf = addslashes($_POST['synopsisvf']);
    $synopsisvo = addslashes($_POST['synopsisvo']);

    $sql = "INSERT INTO film(titreVO, titreVF, annee, realisateur, duree,affiche, lienvideoAlloCine, lienIMDB,synopsisvo, synopsisvf) VALUES ";
    $sql .= "('$filmvo','$filmvf','$annee','$realisateur','$duree','$affiche','$lienvideoAlloCine','$lienIMDB','$synopsisvo','$synopsisvf')";
    // Préparation de la requête
    $requete = $bdd->prepare($sql);
    // Exécution de la requête
    $requete->execute();

    $sql = "SELECT idFilm FROM film WHERE titreVF='$filmvf' AND titreVO='$filmvo'";
    $requete = $bdd->prepare($sql);
    $requete->execute();
    $resultfilm = $requete->fetch();
    $idf = $resultfilm["idFilm"];
    //boucle
    for ($i = 1; $i <= 4; $i++) {
        $genre = $_POST["genre$i"];
        if ($genre != 0) {
            $sql = "INSERT INTO genreFilm(idFilm,idGenre) VALUES ";
            $sql .= "('$idf','$genre')";
            // Préparation de la requête
            $requete = $bdd->prepare($sql);
            // Exécution de la requête
            $requete->execute();
        }
    }

    for ($i = 1; $i <= 4; $i++) {
        $pays = $_POST["pays$i"];
        if ($pays != 0) {


            $sql = "INSERT INTO paysFilm(idFilm,idPays) VALUES ";
            $sql .= "('$idf','$pays')";
            // Préparation de la requête
            $requete = $bdd->prepare($sql);
            // Exécution de la requête
            $requete->execute();
        }
    }

    if ($_FILES["affiche"]["name"] != "") {
        $dir = "imgclubcine/affiche/";
        $fiche = $dir . basename($_FILES["affiche"]["name"]);
        $check = getimagesize($_FILES["affiche"]["tmp_name"]);

        if ($check !== false) {
            move_uploaded_file($_FILES["affiche"]["tmp_name"], $fiche);
        } else {
            echo "Ce n'est pas une image.";
        }
    }
}
//fonction
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

$sql = "SELECT idRecompense,nomRecompense FROM recompense ORDER BY nomRecompense ";
$requete = $bdd->prepare($sql);
$requete->execute();
while ($ligne = $requete->fetch()) {
    $resultrec[] = $ligne;
}
//print_r($result);

//upload un fichier 
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">


<head>
    <meta charset="UTF-8">
    <title>Club de cinéma européen</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="film.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">


    <header>
        <nav class="navbar fixed-top navbar-light bg-light" id="nav" role="navigation">
            <ul class="navbar-nav mx-auto">
                <form class="form-inline">
                    <!-- bouton inscription/connexion et logo du lycée -->
                    <img src="imgclubcine/logo_lycee-removebg-preview.png" style="text-align:center" alt="logo" height="90" width="220">
                </form>
            </ul>
        </nav>
    </header>

    <<body>
        <hr>
        <hr>
        <hr>
        <hr>
        <hr>
        <img src="imgclubcine/logocineeuro.png" style="max-width:100%;height:auto" alt="logo"><br>
        <section id=timeline>
            <div style="text-align:center">
                <table width="100%" class="responsive">
                    <tr>
                        <td><img src="imgclubcine/clapeuro.png" style="max-width:100%;height:100px;width:100px" alt="logo"></td>
                        <td>
                            <p>
                            <h1>CLUB CINÉMA EUROPÉEN</h1>
                            <hr>Création d'un Film
                            </p>
                        </td>
                        <td><img src="imgclubcine/clapeuro.png" style="max-width:100%;height:100px;width:100px" alt="logo"></td>
                    </tr>
                </table>
                <br>
            </div>

            <form method="post" action="film1.php" enctype="multipart/form-data">
                <table class="table table-striped">
                    <thead>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Titre film VF</td>
                            <td>
                            </td>
                            <td colspan="4">
                                <input type="text" name="filmvf">
                            </td>

                        </tr>
                        <tr>
                            <td>Titre film VO</td>
                            <td>
                            </td>
                            <td colspan="4">
                                <input type="text" name="filmvo">
                            </td>

                        </tr>
                        <tr>
                            <td>Affiche</td>
                            <td></td>
                            <td colspan="4">
                                <input type="file" name="affiche" id="affiche">
                            </td>

                        </tr>
                        <tr>
                            <td>Année</td>
                            <td>
                            </td>
                            <td colspan="4">
                                <select class="form-select" aria-label="Default select example" name="annee">
                                    <option>---</option>
                                    <?php
                                    affiche_annee();
                                    ?>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>Pays</td>
                            <?php for ($j = 1; $j <= 4; $j++) { ?>
                                <td>
                                    <select class="form-select" aria-label="Default select example" name="pays<?php echo $j; ?>">
                                        <option value="0">---</option>
                                        <?php
                                        for ($i = 0; $i < count($result); $i++) {
                                            echo '<option  value="' . $result[$i]["idPays"] . '">' . $result[$i]["nomPays"] . '</option>';
                                        }

                                        ?>
                                    </select>
                                </td> <?php } ?>

                        <tr>
                            <td>Genre</td>
                            <?php for ($j = 1; $j <= 4; $j++) { ?>
                                <td>
                                    <select class="form-select" aria-label="Default select example" name="genre<?php echo $j; ?>">
                                        <option value="0">---</option>
                                        <?php
                                        for ($i = 0; $i < count($result1); $i++) {
                                            echo '<option  value="' . $result1[$i]["idGenre"] . '">' . $result1[$i]["nomGenre"] . '</option>';
                                        }

                                        ?>
                                    </select>
                                </td><?php } ?>
                        <tr>
                            <td>Réalisateur</td>
                            <td>
                            </td>
                            <td colspan="4">
                                <input type="text" name="realisateur">
                            </td>

                        </tr>
                        <tr>
                            <td>Durée</td>
                            <td>
                            </td>
                            <td colspan="4">
                                <input type="text" name="duree">
                            </td>

                        </tr>


                        <tr>
                            <td>Lien Vidéo AlloCiné</td>
                            <td>
                            </td>
                            <td colspan="4">
                                <input type="text" name="lienvideoAlloCine">
                            </td>

                        </tr>
                        <tr>
                            <td>Lien Vidéo IMDB</td>
                            <td>
                            </td>
                            <td colspan="4">
                                <input type="text" name="lienIMDB">
                            </td>

                        </tr>
                        <tr>
                            <td>Pitch VF</td>
                            <td>
                            </td>
                            <td colspan="4">
                                <input type="text" class="synopsisvf" name="synopsisvf">
                            </td>

                        </tr>
                        <tr>
                            <td>Pitch VO</td>
                            <td>
                            </td>
                            <td colspan="4">
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