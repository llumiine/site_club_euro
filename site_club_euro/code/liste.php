<?php
//session_start();
//if(!isset($_SESSION["idpers"])) {
//header('Location: index.php');
//}
require_once('config.php');


if (isset($_POST['dateSeance'])) {
  $dateSeance = $_POST['dateSeance'];
  $sql = "SELECT nomPers,prenomPers,dateHeureIns FROM personne INNER JOIN inscription ON personne.idPersonne=inscription.idPersonne  WHERE dateSeance='$dateSeance'";
  $requete = $bdd->prepare($sql);
  $requete->execute();
  $resultseance = $requete->fetchAll();
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
  <title>Club Cinéma Européen</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel="stylesheet" href="film.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>

<body>
  <h1>Club Cinéma Européen</h1>
  <p class="leader">Consultation des inscrits</p>

  <form method="post" action="liste.php" enctype="multipart/form-data">
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

    <table class="table table-striped">
      <thead>
        <td></td>
        <td>Date et Heure inscription</td>

        <td>Nom</td>
        <td>Prenom</td>
      </thead>
      <tbody>


        <?php
        for ($i = 0; $i < count($resultseance); $i++) {

          echo '<tr><td>' . ($i + 1) . '</td><td>' . $resultseance[$i]["dateHeureIns"] . '</td><td> ' . $resultseance[$i]["nomPers"] . '</td> <td>' . $resultseance[$i]["prenomPers"] . '</td></tr>';
        }
        ?>


      </tbody>
    </table>
    </div>

    </form>
  <?php
  }
  ?>
</body>

</html>