<?php
//session_start();
//if(!isset($_SESSION["idpers"])) {
//header('Location: index.php');
//}
$message = "";
require_once('config.php');
if (
    isset($_POST['idf'])
    && isset($_POST['nbr'])

) {

    $idf = $_POST['idf'];
    $nbr = $_POST['nbr'];

    for ($i = 1; $i <= $nbr; $i++) {
        $recompense = $_POST["recompense$i"];
        $sql = "INSERT INTO prixFilm(idRecompense,idFilm) VALUES ";
        $sql .= "('$recompense','$idf')";
        $requete = $bdd->prepare($sql);
        $requete->execute();
    }
}



$sql = "SELECT idFilm,titreVF FROM film ORDER BY titreVF ";
$requete = $bdd->prepare($sql);
$requete->execute();
$result2 = $requete->fetchAll();

if (isset($_POST['idFilm'])) {
    $idf = $_POST['idFilm'];
    $sql = "SELECT idRecompense,nomRecompense FROM recompense ORDER BY nomRecompense ";
    $requete = $bdd->prepare($sql);
    $requete->execute();
    while ($ligne = $requete->fetch()) {
        $resultrec[] = $ligne;
    }
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
    <p class="leader">Ajout de récompense à un film</p>
    <p class="leader"><?php echo $message; ?></p>
    <form method="post" action="recompensemodif.php" enctype="multipart/form-data">
        <select class="form-select" aria-label="Default select example" name="idFilm">
            <option>---</option>
            <?php
            for ($i = 0; $i < count($result2); $i++) {
                echo '<option  value="' . $result2[$i]["idFilm"] . '">' . $result2[$i]["titreVF"] . '</option>';
            }
            ?>
        </select>
        <select class="form-select" aria-label="Default select example" name="nbRec">
            <option>---</option>
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo '<option  value="' . $i . '">' . $i . '</option>';
            }
            ?>
        </select>
        <input type="submit" value="Valider">
    </form>
    <?php
    if (isset($_POST['idFilm'])) {
    ?>
        <form method="post" action="recompensemodif.php" enctype="multipart/form-data">
            <table class="table table-striped">
                <thead>
                </thead>
                <tbody>

                    <input type="hidden" value="<?php echo $_POST['idFilm'] ?>" name="idf">
                    <input type="hidden" value="<?php echo $_POST['nbRec'] ?>" name="nbr">

                    <?php
                    $nbRec = $_POST['nbRec'];
                    for ($i = 1; $i <= $nbRec; $i++) {
                    ?>
                        <tr>
                            <td>Récompense <?php echo $i ?></td>

                            <td><select class="form-select" aria-label="Default select example" name="recompense<?php echo $i; ?>">
                                    <option>---</option>
                                    <?php
                                    for ($j = 0; $j < count($resultrec); $j++) {
                                        echo '<option  value="' . $resultrec[$j]["idRecompense"] . '">' . $resultrec[$j]["nomRecompense"] . '</option>';
                                    }

                                    ?>
                                </select></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            </div>
            <input type="submit" value="Modifier">
        </form>
    <?php
    }
    ?>
</body>

</html>