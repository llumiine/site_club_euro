<?php
//session_start();
//if(!isset($_SESSION["idpers"])) {
//header('Location: index.php');
//}
require_once('config.php');
if (isset($_POST['dateSeance']) && isset($_POST['idFilm']) && isset($_POST['animatrice1']) && isset($_POST['animatrice2'])) {

    $seance = addslashes($_POST['dateSeance']);
    $film = addslashes($_POST['idFilm']);
    $animatrice1 = addslashes($_POST['animatrice1']);
    $animatrice2 = addslashes($_POST['animatrice2']);

    $sql = "INSERT INTO seance(idFilm,dateSeance) VALUES ";
    $sql .= "('$film','$seance')";
    $requete = $bdd->prepare($sql);
    $requete->execute();

    $sql = "INSERT INTO animateur(idPersonne,dateSeance) VALUES ";
    $sql .= "('$animatrice1', '$seance')";
    $requete = $bdd->prepare($sql);
    $requete->execute();

    $sql = "INSERT INTO animateur(idPersonne,dateSeance) VALUES ";
    $sql .= "('$animatrice2', '$seance')";
    $requete = $bdd->prepare($sql);
    $requete->execute();
}

$sql = "SELECT idFilm,titreVF FROM film ORDER BY titreVF ";
$requete = $bdd->prepare($sql);
$requete->execute();
$result = $requete->fetchAll();

$sql = "SELECT idPersonne,nomPers,prenomPers FROM personne WHERE coordo=1 ORDER BY nomPers ";
$requete = $bdd->prepare($sql);
$requete->execute();
$result4 = $requete->fetchAll();
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Club Cinéma Européen</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="film.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>

<body>
    <h1>Club Cinéma Européen</h1>
    <p class="leader">Création seance</p>

    <form method="post" action="seance.php" enctype="multipart/form-data">
        <table class="table table-striped">
            <thead></thead>
            <tbody>
                <tr>
                    <td>Date séance</td>
                    <td>
                        <input type="date" name="dateSeance">
                    </td>
                </tr>
                <tr>
                    <td>Film</td>
                    <td>
                        <select class="form-select" aria-label="Default select example" name="idFilm">
                            <option>---</option>
                            <?php
                            for ($i = 0; $i < count($result); $i++) {
                                echo '<option  value="' . $result[$i]["idFilm"] . '">' . $result[$i]["titreVF"] . '</option>';
                            }

                            ?>
                        </select>
                    </td>
                <tr>
                    <td>Animatrice(s)</td>
                    <td>
                        <select class="form-select" aria-label="Default select example" name="animatrice1">
                            <option>---</option>
                            <?php
                            for ($i = 0; $i < count($result4); $i++) {
                                echo '<option  value="' . $result4[$i]["idPersonne"] . '">' . $result4[$i]["prenomPers"] . " " . $result4[$i]["nomPers"] . '</option>';
                            }

                            ?>
                        </select>
                    </td>
                    <td>
                        <select class="form-select" aria-label="Default select example" name="animatrice2">
                            <option>---</option>
                            <?php
                            for ($i = 0; $i < count($result4); $i++) {
                                echo '<option  value="' . $result4[$i]["idPersonne"] . '">' . $result4[$i]["prenomPers"] . " " . $result4[$i]["nomPers"] . '</option>';
                            }

                            ?>
                        </select>
                    </td>
                </tr>
            </tbody>
        </table>
        </div>
        <input type="submit" value="Créer séance">
    </form>
</body>

</html>