<?php
//session_start();
//if(!isset($_SESSION["idpers"])) {
//header('Location: index.php');
//}
require_once('config.php');
if (
    isset($_POST['nom'])
    && isset($_POST['prenom'])
    && isset($_POST['mail'])

) 
{
    $nom = addslashes($_POST['nom']);
    $prenom = addslashes($_POST['prenom']);
    $mail = addslashes($_POST['mail']);

    $sql = "INSERT INTO personne(nomPers,prenomPers,mail,mdp,nbAbsences) VALUES ";
    $sql .= "('$nom','$prenom','$mail','12345',0)";
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
    <nav class="navbar navbar-light bg-light" id="nav">
        <a class="navbar-brand">Navbar</a>
        <form class="form-inline">

            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Inscription</button>
        </form>
    </nav>
</header>

<body>
    <h1>Club de cinéma européen</h1>
    <p class="leader">Ajouter un élève</p>

    <form method="post" action="ajouteleve.php" enctype="multipart/form-data">
        <table class="table table-striped">
            <thead>
            </thead>
            <tbody>
                <tr>
                    <td>Nom</td>
                    <td>
                    </td>
                    <td colspan="4">
                        <input type="text" name="nom">
                    </td>

                </tr>
                <tr>
                    <td>prenom</td>
                    <td>
                    </td>
                    <td colspan="4">
                        <input type="text" name="prenom">
                    </td>

                </tr>
                <tr>
                    <td>Mail </td>
                    <td>
                    </td>
                    <td colspan="4">
                        <input type="email" name="mail">
                    </td>

                </tr>
            </tbody>
        </table>
        </div>

        <input type="submit" value="Ajouter">
    </form>

</body>

</html>