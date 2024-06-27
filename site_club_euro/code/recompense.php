<?php
//session_start();
//if(!isset($_SESSION["idpers"])) {
//header('Location: index.php');
//}
require_once('config.php');
if (isset($_POST['nomRecompense']))

{
    
    $nom = addslashes($_POST['nomRecompense']);    
    $sql = "INSERT INTO recompense(nomRecompense) VALUES ";
   
    $sql .= "('$nom')";
   
    $requete = $bdd->prepare($sql);
    
    $requete->execute();

    
    
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
    <nav class="navbar fixed-top navbar-light bg-light" id="nav" role="navigation">
        <ul class="navbar-nav mx-auto">
            <form class="form-inline">
                <!-- bouton inscription/connexion et logo du lycée -->
                <img src="imgclubcine/logo_lycee-removebg-preview.png" style="text-align:center" alt="logo" height="90" width="220">
            </form>
        </ul>
    </nav>
</header>

<body>
<hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <img src="imgclubcine/logocineeuro.png" style="max-width:100%;height:auto" alt="logo"><br>
    
    <div style="text-align:center">
            <table width="100%" class="responsive">
                <tr>
                    <td><img src="imgclubcine/clapeuro.png" style="max-width:100%;height:100px;width:100px" alt="logo"></td>
                    <td>
                        <p>
                        <h1>CLUB CINÉMA EUROPÉEN</h1>
                        <hr>Création d'une récompense
                        </p>
                    </td>
                    <td><img src="imgclubcine/clapeuro.png" style="max-width:100%;height:100px;width:100px" alt="logo"></td>
                </tr>
            </table>
            <br>
        </div>
        <form method="post" action="recompense.php" enctype="multipart/form-data">
            <table class="table table-striped">
                <thead>

                </thead>
                <tbody>


                    <tr>
                        <td>Nom récompense</td>
                        <td>
                        </td>
                        <td>
                            <input type="text" name="nomRecompense">
                        </td>

                    </tr>
                </tbody>
            </table>
            </div>

            <input type="submit" value="Créer récompense">
        </form>

</body>

</html>