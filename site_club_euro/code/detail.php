<?php
if (isset($_GET["idf"])) {
    $idf = $_GET["idf"];
    require_once('config.php');
    $sql = "SELECT nomPays,titreVO, titreVF,affiche,annee,realisateur,duree,synopsisVF,synopsisVO,nomGenre,lienVideoIMDB,lienVideoAlloCine FROM Film  NATURAL JOIN Pays NATURAL JOIN Genre WHERE idFilm='$idf'";
    $requete = $bdd->prepare($sql);
    $requete->execute();

    $result = $requete->fetchAll();
    // print_r($result);
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">


</html>

<head>
    <meta charset="UTF-8">
    <title> (CCE) Ciné club européen</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

</head>
<!-- barre de navigation -->
<header>
    <nav class="navbar fixed-top navbar-light bg-light" id="nav" role="navigation">
        <ul class="navbar-nav mx-auto">
            <form class="form-inline">
                <!-- bouton inscription/connexion et logo du lycée  -->
                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                <img src="imgclubcine/logo_lycee-removebg-preview.png" style="text-align:center;" alt="logo" height="90" width="220">
        </ul>
        <button class="btn btn-outline-primary my-2 my-sm-0;" formaction="connexionformc.php" type="submit">Connexion</button>
        </form>
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
                    <hr>Détails
                    </p>
                </td>
                <td><img src="imgclubcine/clapeuro.png" style="max-width:100%;height:100px;width:100px" alt="logo"></td>
            </tr>
        </table>
        </class=>
    </div>
    <div style="margin-left:23%;max-width:100%;height:auto;text-align:center;">
        <table class="table table-striped" style="width:70%;">
            <tr>
                <td>
                    Titre VF
                </td>
                <td>
                    <?php echo $result[0]["titreVF"]; ?>
                </td>
            </tr>
            <tr>
                <td>
                    Titre VO
                </td>
                <td>
                    <?php echo $result[0]["titreVO"]; ?>
                </td>
            </tr>
            <tr>
                <td>
                    Année et pays
                </td>
                <td>
                    <?php echo $result[0]["annee"] . "&nbsp;|&nbsp;" . $result[0]["nomPays"]; ?>
                </td>
            </tr>
            <tr>
                <td>
                    Réalisateur
                </td>
                <td>
                    <?php echo $result[0]["realisateur"]; ?>
                </td>
            </tr>
            <tr>
                <td>
                    Genre
                </td>
                <td>
                    <?php echo $result[0]["nomGenre"]; ?>
                </td>
            </tr>
            <tr>
                <td>
                    Durée
                </td>
                <td>
                    <?php echo $result[0]["duree"] . "&nbsp; minutes"; ?>
                </td>
            </tr>
            <tr>
                <td>
                    Synopsis VF
                </td>
                <td>
                    <?php echo $result[0]["synopsisVF"]; ?>
                </td>
            </tr>
            <tr>
                <td>
                    Synopsis VO
                </td>
                <td>
                    <?php echo $result[0]["synopsisVO"]; ?>
                </td>
            </tr>
            <tr>
                <td>
                    Lien Video AlloCiné
                </td>
                <td>
                    <a href="<?php echo $result[0]["lienVideoAlloCine"]; ?>" target="_blank">AlloCiné</a>
                </td>
            </tr>
            <tr>
                <td>
                    Lien IMDB
                </td>
                <td>
                    <?php echo $result[0]["lienVideoIMDB"]; ?>
                </td>
            </tr>



        </table>
        <hr style="border:none">
    </div>
    <button style="background-color:#2824ff; width:130px" type="button" class="btn btn-outline-warning fixed-bottom">Haut de page</button>
    <!-- bar du bas-->
    <footer class="bg-light text-center text-lg-start">
        <!-- grille 1 -->
        <div class="container p-4">
            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Links</h5>

                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="#!" class="text-dark">RGPD</a>
                        </li>
                        <li>
                            <a href="#!" class="text-dark">Link 2</a>
                        </li>
                        <li>
                            <a href="#!" class="text-dark">Link 3</a>
                        </li>
                        <li>
                            <a href="#!" class="text-dark">Link 4</a>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-0">Links</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="#!" class="text-dark">Link 1</a>
                        </li>
                        <li>
                            <a href="#!" class="text-dark">Link 2</a>
                        </li>
                        <li>
                            <a href="#!" class="text-dark">Link 3</a>
                        </li>
                        <li>
                            <a href="#!" class="text-dark">Link 4</a>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Links</h5>

                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="#!" class="text-dark">Link 1</a>
                        </li>
                        <li>
                            <a href="#!" class="text-dark">Link 2</a>
                        </li>
                        <li>
                            <a href="#!" class="text-dark">Link 3</a>
                        </li>
                        <li>
                            <a href="#!" class="text-dark">Link 4</a>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-0">Links</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="#!" class="text-dark">Link 1</a>
                        </li>
                        <li>
                            <a href="#!" class="text-dark">Link 2</a>
                        </li>
                        <li>
                            <a href="#!" class="text-dark">Link 3</a>
                        </li>
                        <li>
                            <a href="#!" class="text-dark">Link 4</a>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2023 Copyright
        </div>
        <!-- Copyright -->
    </footer>

</body>

</html>