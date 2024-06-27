<!-- <?php
        // require_once('config.php');
        // $sql = "SELECT nomPays, titreVF,affiche FROM Film NATURAL JOIN Pays";
        // $requete = $bdd->prepare($sql);
        // $requete->execute();

        // $result[] = $requete->fetchAll();
        // //print_r($result);

        ?> -->
<!DOCTYPE html>
<html lang="fr" dir="ltr">

</html>

<head>
    <meta charset="UTF-8">
    <title> (CEE) Ciné club européen</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

</head>
<!-- barre de navigation -->
<header>
    <nav class="navbar fixed-top navbar-light bg-light" id="nav">
        <ul class="navbar-nav mx-auto">
            <form class="form-inline">
                <!-- bouton inscription/connexion et logo du lycée -->
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <img src="imgclubcine/logo_lycee-removebg-preview.png" style="text-align:center" alt="logo" height="90" width="220">
        </ul>
        <button class="btn btn-outline-primary my-2 my-sm-0;" formaction="connexionformc.php" type="submit">Connexion</button>
        </form>
    </nav>
</header>

<body>
    <!-- frise chrono -->
    <section id=timeline>
        <img src="imgclubcine/logocineeuro.png" style="max-width:100%;height:auto" alt="logo"><br>
        <div style="text-align:center">
            <!-- trouver un truc pour centrer le tout est c'est bon-->
            <table>
                <tr>
                    <td><img src="imgclubcine/clapeuro.png" style="max-width:100%;height:100px;width:100px" alt="logo"></td>
                    <td>
                        <p style="line-height:65px">
                        <h1>Club Cinéma Européen</h1>
                        </p>
                    </td>
                    <td><img src="imgclubcine/clapeuro.png" style="max-width:100%;height:100px;width:100px" alt="logo"></td>
                </tr>
            </table>
        </div>
        <p class="leader">All cards must be the same height and width for space calculations on large screens.</p>
        <div class="demo-card-wrapper">
            <div class="demo-card demo-card--step1">
                <!-- card film 1 -->
                <div class="head">
                    <div class="number-box">
                        <!-- date et heure séance -->
                        <span>21 Sept</span>
                    </div>
                    <h2><span class="small">Allemand</span><em> Good Bye Lenin</em></h2>
                </div>
                <div class="body">
                    <img class="center" src="imgclubcine/affiche_alle.png" style="max-width:50%;height:auto" width="10" height="200"><br>
                    <a href="#" class="btn btn-primary">Voir la suite</a> &nbsp;
                    <button type="button" onclick="window.location.href = 'inscription.php';" class="btn btn-warning" formaction="inscription.php" type="submit">Inscription</button>
                </div>
            </div>
            <!-- card film 2 -->
            <div class="demo-card demo-card--step2">
                <div class="head">
                    <div class="number-box">
                        <span>02</span>
                    </div>
                    <h2><span class="small">Subtitle</span> Confidence</h2>
                </div>
                <div class="body">
                    <img class="center" src="imgclubcine/affiche_alle.png" style="max-width:50%;height:auto" width="10" height="200"><br>
                    <a href="#" class="btn btn-primary">Voir la suite</a> &nbsp;
                    <button type="button" class="btn btn-warning" formaction="inscription.php" type="submit">Inscription</button>
                </div>
            </div>
            <!-- card film 3 -->
            <div class="demo-card demo-card--step3">
                <div class="head">
                    <!-- date et heure séance -->
                    <div class="number-box">
                        <span>03</span>
                    </div>
                    <h2><span class="small">Subtitle</span> Adaptation</h2>
                </div>
                <div class="body">
                    <img class="center" src="imgclubcine/affiche_alle.png" style="max-width:50%;height:auto" width="10" height="200"><br>
                    <a href="#" class="btn btn-primary">Voir la suite</a> &nbsp;
                    <button type="button" class="btn btn-warning" formaction="inscription.php" type="submit">Inscription</button>
                </div>
            </div>
            <!-- card film 4 -->
            <div class="demo-card demo-card--step4">
                <div class="head">
                    <div class="number-box">
                        <span>04</span>
                    </div>
                    <h2><span class="small">Subtitle</span> Consistency</h2>
                </div>
                <div class="body">
                    <img src="http://placehold.it/1000x500" alt="Graphic"><img class="center" src="imgclubcine/affiche_alle.png" style="max-width:50%;height:auto" width="10" height="200"><br>
                    <a href="#" class="btn btn-primary">Voir la suite</a> &nbsp;
                    <button type="button" class="btn btn-warning" formaction="inscription.php" type="submit">Inscription</button>
                </div>
            </div>
            <!-- card film 5 -->
            <div class="demo-card demo-card--step5">
                <div class="head">
                    <div class="number-box">
                        <span>05</span>
                    </div>
                    <h2><span class="small">Subtitle</span> Conversion</h2>
                </div>
                <div class="body">
                    <img class="center" src="imgclubcine/affiche_alle.png" style="max-width:50%;height:auto" width="10" height="200"><br>
                    <a href="#" class="btn btn-primary">Voir la suite</a> &nbsp;
                    <button type="button" class="btn btn-warning" formaction="inscription.php" type="submit">Inscription</button>
                </div>
            </div>
            <!-- card film 6 -->
            <div class="demo-card demo-card--step6">
                <div class="head">
                    <div class="number-box">
                        <span>06</span>
                    </div>
                    <h2><span class="small">Subtitle</span> Consistency</h2>
                </div>
                <div class="body">
                    <img class="center" src="imgclubcine/affiche_alle.png" style="max-width:50%;height:auto" width="10" height="200"><br>
                    <a href="#" class="btn btn-primary">Voir la suite</a> &nbsp;
                    <button type="button" class="btn btn-warning" formaction="inscription.php" type="submit">Inscription</button>
                </div>
            </div>
        </div>
    </section>

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