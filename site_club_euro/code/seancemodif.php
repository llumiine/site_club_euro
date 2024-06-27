<?php
//session_start();
//if(!isset($_SESSION["idpers"])) {
//header('Location: index.php');
//}
require_once('config.php');
if (isset($_POST['dtSeance']) && isset($_POST['idFilm']) && isset($_POST['animatrice1']) && isset($_POST['animatrice2'])) {
    $dseance = $_POST['dSeance'];
    $seance = addslashes($_POST['dtSeance']);
    $film = addslashes($_POST['idFilm']);
    $animatrice1 = addslashes($_POST['animatrice1']);
    $animatrice2 = addslashes($_POST['animatrice2']);
    $anim1 = addslashes($_POST['anim1']);
    $anim2 = addslashes($_POST['anim2']);

    $sql = "UPDATE seance SET idFilm='$film',dateSeance='$seance' WHERE dateSeance='$dseance'";
    $requete = $bdd->prepare($sql);
    $requete->execute();

    if ($anim1 != $animatrice1) {
        $sql = "UPDATE animateur SET idPersonne='$animatrice1' WHERE dateSeance='$seance' AND idPersonne='$anim1'";
        $requete = $bdd->prepare($sql);
        $requete->execute();
    }

    if ($anim2 != $animatrice2) {
        $sql = "UPDATE animateur SET idPersonne='$animatrice2' WHERE dateSeance='$seance' AND idPersonne='$anim2'";
        $requete = $bdd->prepare($sql);
        $requete->execute();
    }
}

if (isset($_POST['dateSeance'])) {
    $dateSeance = $_POST['dateSeance'];
    $sql = "SELECT idFilm FROM seance WHERE dateSeance='$dateSeance'";
    $requete = $bdd->prepare($sql);
    $requete->execute();
    $resultseance = $requete->fetch();

    $sql = "SELECT idPersonne FROM animateur WHERE dateSeance='$dateSeance'";
    $requete = $bdd->prepare($sql);
    $requete->execute();
    $resultanim = $requete->fetchAll();
}

$sql = "SELECT dateSeance,titreVF FROM seance INNER JOIN film ON seance.idFilm=film.idFilm ORDER BY dateSeance ";
$requete = $bdd->prepare($sql);
$requete->execute();
$result3 = $requete->fetchAll();

$sql = "SELECT idFilm,titreVF FROM film ORDER BY titreVF ";
$requete = $bdd->prepare($sql);
$requete->execute();
$result = $requete->fetchAll();

$sql = "SELECT idPersonne,nomPers,prenomPers FROM personne WHERE coordo=TRUE  ORDER BY nomPers ";
$requete = $bdd->prepare($sql);
$requete->execute();
$resultpers = $requete->fetchAll();
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
    <p class="leader">Modification d'une séance</p>

    <form method="post" action="seancemodif.php" enctype="multipart/form-data">
        <select class="form-select" aria-label="Default select example" name="dateSeance">
            <option>---</option>
            <?php
            for ($i = 0; $i < count($result3); $i++) {
                echo '<option  value="' . $result3[$i]["dateSeance"] . '">' . $result3[$i]["dateSeance"] . ' : ' . $result3[$i]["titreVF"] . '</option>';
            }
            ?>
        </select>
        <input type="submit" value="Valider">
    </form>
    <?php
    if (isset($_POST['dateSeance'])) {
    ?>
        <form method="post" action="seancemodif.php" enctype="multipart/form-data">
            <table class="table table-striped">
                <thead>
                </thead>
                <tbody>
                    <tr>
                        <td>Date séance</td>
                        <td>
                        </td>
                        <td>
                            <input type="date" value="<?php echo $dateSeance;  ?>" name="dtSeance">
                            <input type="hidden" value="<?php echo $dateSeance;  ?>" name="dSeance">
                        </td>
                    </tr>
                    <tr>
                        <td>Film</td>
                        <td>
                        </td>
                        <td>
                            <select class="form-select" aria-label="Default select example" name="idFilm">
                                <?php
                                for ($i = 0; $i < count($result); $i++) {
                                    if ($result[$i]["idFilm"] == $resultseance["idFilm"]) {
                                        echo '<option selected=selected value="' . $result[$i]["idFilm"] . '">' . $result[$i]["titreVF"] . '</option>';
                                    } else {
                                        echo '<option  value="' . $result[$i]["idFilm"] . '">' . $result[$i]["titreVF"] . '</option>';
                                    }
                                }
                                ?>
                            </select>
                        </td>
                    <tr>
                    <tr>
                        <td>Animatrice(s)</td>
                        <td>
                        </td>
                        <td>
                            <select class="form-select" aria-label="Default select example" name="animatrice1">
                                <option>---</option>
                                <?php
                                for ($i = 0; $i < count($resultpers); $i++) {
                                    if ($resultanim[0]["idPersonne"] == $resultpers[$i]["idPersonne"]) {
                                        echo '<option selected=selected value="' . $resultpers[$i]["idPersonne"] . '">' . $resultpers[$i]["prenomPers"] . " " . $resultpers[$i]["nomPers"] . '</option>';
                                    } else {
                                        echo '<option value="' . $resultpers[$i]["idPersonne"] . '">' . $resultpers[$i]["prenomPers"] . " " . $resultpers[$i]["nomPers"] . '</option>';
                                    }
                                }
                                ?>
                            </select>
                            <input type="hidden" value="<?php echo $resultanim[0]["idPersonne"];  ?>" name="anim1">
                        </td>
                        <td>
                            <select class="form-select" aria-label="Default select example" name="animatrice2">
                                <option>---</option>
                                <?php
                                for ($i = 0; $i < count($resultpers); $i++) {
                                    if ($resultanim[1]["idPersonne"] == $resultpers[$i]["idPersonne"]) {
                                        echo '<option selected=selected value="' . $resultpers[$i]["idPersonne"] . '">' . $resultpers[$i]["prenomPers"] . " " . $resultpers[$i]["nomPers"] . '</option>';
                                    } else {
                                        echo '<option value="' . $resultpers[$i]["idPersonne"] . '">' . $resultpers[$i]["prenomPers"] . " " . $resultpers[$i]["nomPers"] . '</option>';
                                    }
                                }
                                ?>
                            </select>
                            <input type="hidden" value="<?php echo $resultanim[1]["idPersonne"];  ?>" name="anim2">
                        </td>
                    </tr>
                </tbody>
            </table>
            </div>
            <input type="submit" value="Modifier séance">
        </form>
    <?php
    }
    ?>
</body>

</html>