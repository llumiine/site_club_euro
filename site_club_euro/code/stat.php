<?php
//session_start();
//if(!isset($_SESSION["idpers"])) {
//header('Location: index.php');
//}
require_once('config.php');
if (isset($_POST['anneesco'])) {
    $an = explode("/", $_POST['anneesco']);
    $an1 = $an[0];
    $an2 = $an[1];
    $sql = "SELECT seance.dateSeance AS ds,titreVF,COUNT(*) AS nbIns FROM seance INNER JOIN film ON seance.idFilm=film.idFilm INNER JOIN inscription ON seance.dateSeance=inscription.dateSeance WHERE (MONTH(seance.dateSeance)>=9 AND YEAR(seance.dateSeance)='$an1') OR (MONTH(seance.dateSeance)<=6 AND YEAR(seance.dateSeance)='$an2') GROUP BY ds,titreVF";

    $requete = $bdd->prepare($sql);
    $requete->execute();
    $resultstat = $requete->fetchAll();

    $sql = "SELECT seance.dateSeance AS ds,titreVF,COUNT(*) AS nbpres FROM seance INNER JOIN film ON seance.idFilm=film.idFilm INNER JOIN inscription ON seance.dateSeance=inscription.dateSeance WHERE ((MONTH(seance.dateSeance)>=9 AND YEAR(seance.dateSeance)='$an1') OR (MONTH(seance.dateSeance)<=6 AND YEAR(seance.dateSeance)='$an2')) AND presence=TRUE GROUP BY ds,titreVF";

    $requete = $bdd->prepare($sql);
    $requete->execute();
    $resultpres = $requete->fetchAll();
}

$sql = "SELECT MIN(YEAR(dateSeance)) AS anMin,MAX(YEAR(dateSeance)) AS anMax FROM seance";
$requete = $bdd->prepare($sql);
$requete->execute();
$result3 = $requete->fetch();
$nbAnnee = $result3["anMax"] - $result3["anMin"];
$tabAn[] = $result3["anMin"];
for ($i = 0; $i < $nbAnnee; $i++) {
    $tabAn[] = $tabAn[$i] + 1;
}

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
    <p class="leader">Statistique</p>

    <form method="post" action="stat.php" enctype="multipart/form-data">
        <select class="form-select" aria-label="Default select example" name="anneesco">
            <option>---</option>
            <?php
            for ($i = 0; $i < count($tabAn) - 1; $i++) {
                $an = $tabAn[$i] . "/" . $tabAn[$i + 1];
                echo '<option  value="' . $an . '">' . $an . '</option>';
            }
            ?>
        </select>
        <input type="submit" value="Valider">
    </form>
<!-- début php -->
    <?php
    if (isset($_POST['anneesco'])) {
    ?>
<!-- fin php -->

        <table class="table table-striped">
            <thead>
                <th>Date séance</th>
                <th>Film</th>
                <th>Nombre d'inscriptions</th>
                <th>Nombre de présents</th>
                <th>Pourcentage de présences</th>
            </thead>
            <tbody>
                <?php $totins = $totpres = 0;
                for ($i = 0; $i < count($resultstat); $i++) {
                    $totins += $resultstat[$i]["nbIns"];
                    $totpres += $resultpres[$i]["nbpres"];
                ?>
                <tr>
                        <td>
                            <?php echo $resultstat[$i]["ds"];  ?>

                        </td>
                        <td>
                            <?php echo $resultstat[$i]["titreVF"];  ?>

                        </td>
                        <td>
                            <?php echo $resultstat[$i]["nbIns"];  ?>

                        </td>
                        <td>
                            <?php echo $resultpres[$i]["nbpres"];  ?>

                        </td>
                        <td>
                            <?php echo round(($resultpres[$i]["nbpres"] / $resultstat[$i]["nbIns"]) * 100, 2) . " %";  ?>

                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Total <?php echo $_POST['anneesco']; ?></td>
                        <td>
                            <?php echo round(($totpres / $totins) * 100, 2) . " %";  ?>
                        </td>
                    </tr>
                <?php } ?>

            </tbody>
        </table>
        </div>

        </form>
    <?php
    }
    ?>
</body>

</html>