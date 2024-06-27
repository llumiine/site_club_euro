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
    <p class="leader">MENU ADMINS</p>

    <form method="post" action="film.php" enctype="multipart/form-data">
        <table class="table table-striped">
            <thead>

            </thead>
            <tbody>


                <tr>
                    <td>Film</td>
                    
                    <td>
                         <a href="film1.php"><button type="button" class="btn btn-dark">Créer</button>
                        <a href="film2.php"> <button type="button" class="btn btn-dark">Modifier</button>

                    </td>

                </tr>
                <tr>
                    <td>Séance</td>
                    
                    <td>
                        <a href="seance.php"><button  type="button" class="btn btn-dark">Créer</button> <a href="seancemodif.php"> <button type="button" class="btn btn-dark">Modifier</button>
                        <a href="supp.php"><button  type="button" class="btn btn-danger">Supprimer</button>
                    </td>

                </tr>
                <tr>
                    <td>Présence</td>
                   
                    <td>
                       <a href="presence.php"> <button  type="button" class="btn btn-dark">Mise à jour</button>

                    </td>

                </tr>
                <tr>
                    <td>Récompense</td>
                   
                    <td>
                        <a href="recompense.php"><button  type="button" class="btn btn-dark">Créer</button>
                        <a href="recompensemodif.php"> <button type="button" class="btn btn-dark">Ajouter à un film</button>

                    </td>


                </tr>
                <tr>
                    <td>Enlever une absence</td>
                    

                    <td>

                        <a href="enleveabs.php"><button  type="button" class="btn btn-dark">Modifier</button>
                    </td>
                    
                </tr>
                    <td>Statistique</td>
                    
                    <td>
                        <a href="stat.php"><button type="button" class="btn btn-dark">Consulter</button>
                    </td>
                <tr>
                    <td>Liste des inscrits</td>
                    
                    <td>
                        <a href="liste.php"><button type="button" class="btn btn-dark">Consulter</button>
                    </td>
                    
                </tr>
                <tr>
                    
                    <td>Ajouter un élève</td>
                    
                    <td>
                        <a href="ajouteleve.php"><button type="button" class="btn btn-dark">Ajouter</button>
                    </td>
                </tr>
                <tr>
                    
                    <td>Réinitialisation du mot de passe </td>
                    
                    <td>
                    <a href="motdepasse.php"><button type="button" class="btn btn-dark">Reinitialiser</button>
                    </td>
                </tr>
                






            </tbody>
        </table>
        </div>

    </form>

</body>

</html>