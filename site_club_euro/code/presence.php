<?php
//session_start();
//if(!isset($_SESSION["idpers"])) {
//header('Location: index.php');
//}
require_once('config.php');
if (isset($_POST['dtSeance']) && isset($_POST['nbpers'])) {
    $dtseance = $_POST['dtSeance'];
    $nbpers = $_POST['nbpers'];

    for ($i = 1; $i <= $nbpers; $i++) {
        $idp = $_POST["idpers$i"];
        $presence = $_POST["presence$i"];
        if ($presence == "oui") {
            $sql = "UPDATE inscription SET presence = TRUE WHERE dateSeance='$dtseance' AND idPersonne = '$idp'";
            $requete = $bdd->prepare($sql);
            $requete->execute();
        } else {
            $sql = "UPDATE inscription SET presence = FALSE WHERE dateSeance='$dtseance' AND idPersonne = '$idp'";
            $requete = $bdd->prepare($sql);
            $requete->execute();

            $sql = "UPDATE personne SET nbAbsences = nbAbsences + 1 WHERE idPersonne = '$idp'";
            $requete = $bdd->prepare($sql);
            $requete->execute();
        }
    }
}

if (isset($_POST['dateSeance'])) {
    $dateSeance = $_POST['dateSeance'];
    $sql = "SELECT personne.idPersonne AS idp,nomPers,prenomPers,mail,presence FROM personne INNER JOIN inscription ON personne.idPersonne = inscription.idPersonne WHERE dateSeance='$dateSeance' ORDER BY nomPers";
    $requete = $bdd->prepare($sql);
    $requete->execute();
    $resultins = $requete->fetchAll();
}
//print_r ($resultins);
$sql = "SELECT DISTINCT seance.dateSeance,titreVF FROM seance INNER JOIN film ON seance.idFilm=film.idFilm INNER JOIN inscription ON seance.dateSeance=inscription.dateSeance WHERE presence IS NULL ORDER BY seance.dateSeance ";
$requete = $bdd->prepare($sql);
$requete->execute();
$result3 = $requete->fetchAll();
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
    <p class="leader">Présence</p>

    <form method="post" action="presence.php" enctype="multipart/form-data">
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
        <form method="post" action="presence.php" enctype="multipart/form-data">
            <table class="table table-striped">
                <thead>
                    <td>Nom Prénom (courriel)</td>
                    <td>Présent</td>
                    <td>Absent</td>

                </thead>
                <tbody>
                    <?php
                    for ($i = 0; $i < count($resultins); $i++) {
                    ?>
                        <tr>
                            <td>
                                <?php
                                echo $resultins[$i]["nomPers"] . " " . $resultins[$i]["prenomPers"] . " (" . $resultins[$i]["mail"] . ")";
                                ?>
                                <input type="hidden" name="idpers<?php echo ($i + 1) ?>" value="<?php echo $resultins[$i]["idp"]; ?>">
                            </td>
                            <td>
                                <input type="radio" value="oui" name="presence<?php echo ($i + 1) ?>" checked>
                            </td>
                            <td>
                                <input type="radio" value="non" name="presence<?php echo ($i + 1) ?>">
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            </div>
            <input type="hidden" name="dtSeance" value="<?php echo $dateSeance; ?>">
            <input type="hidden" name="nbpers" value="<?php echo $i; ?>">
            <input type="submit" value="Modifier présence">
        </form>
    <?php
    }
    ?>
</body>

</html>