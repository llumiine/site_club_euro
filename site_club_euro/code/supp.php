<?php
//session_start();
//if(!isset($_SESSION["idpers"])) {
//header('Location: index.php');
//}
require_once('config.php');

if (isset($_POST['dateSeance'])) {
    $seance = $_POST['dateSeance'];
    $sql = "DELETE FROM seance WHERE dateSeance='$seance'";
    $requete = $bdd->prepare($sql);
    $requete->execute();
}

$sql = "SELECT dateSeance,titreVF FROM seance INNER JOIN film ON seance.idFilm=film.idFilm ORDER BY dateSeance ";
$requete = $bdd->prepare($sql);
$requete->execute();
$result3 = $requete->fetchAll();
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


    <h1>Club de cinéma européen</h1>
    <p class="leader">Suppression séance</p>

    <form method="post" action="supp.php" enctype="multipart/form-data">
        <select class="form-select" aria-label="Default select example" name="dateSeance">
            <option>---</option>
            <?php
            for ($i = 0; $i < count($result3); $i++) {
                echo '<option  value="' . $result3[$i]["dateSeance"] . '">' . $result3[$i]["dateSeance"] . ' : ' . $result3[$i]["titreVF"] . '</option>';
            }

            ?>
        </select>
        <input type="submit" value="Supprimer">
    </form>


</body>

</html>