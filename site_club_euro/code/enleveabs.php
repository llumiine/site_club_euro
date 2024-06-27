<?php
//session_start();
//if(!isset($_SESSION["idpers"])) {
//header('Location: index.php');
//}
require_once('config.php');
if (isset($_POST['idPers'])) {
    $idPers = $_POST['idPers'];


    $sql = "UPDATE personne SET nbAbsences=nbAbsences-1  WHERE idPersonne='$idPers'";
    $requete = $bdd->prepare($sql);
    $requete->execute();
}




$sql = "SELECT idPersonne,nomPers,prenomPers,mail FROM personne WHERE nbAbsences > 0 ORDER BY nomPers ";
$requete = $bdd->prepare($sql);
$requete->execute();
$result = $requete->fetchAll();
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
    <p class="leader">Suppression d'une absence</p>

    <form method="post" action="enleveabs.php" enctype="multipart/form-data">
        <select class="form-select" aria-label="Default select example" name="idPers">
            <option>---</option>
            <?php
            for ($i = 0; $i < count($result); $i++) {
                echo '<option  value="' . $result[$i]["idPersonne"] . '">' . $result[$i]["nomPers"] . ' ' . $result[$i]["prenomPers"] .  ' (' . $result[$i]["mail"] . ')</option>';
            }
            ?>
        </select>
        <input type="submit" value="Valider">
    </form>

</body>

</html>