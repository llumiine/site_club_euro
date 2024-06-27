<?php
session_start();
$message = "";
if (isset($_SESSION["idpers"])) {
    $notinit = false;
    $idp = $_SESSION["idpers"];
    require_once('config.php');
    $sql = "SELECT mdp FROM Personne WHERE idPersonne='$idp' AND coordo = 1";
    $requete = $bdd->prepare($sql);
    $requete->execute();
    $result = $requete->fetch();
    $nb = $requete->rowcount();
    if ($nb > 0) {
		if ($result['mdp'] == '12345') {
			$notinit = true;
		}
	}
	else {
		header('Location: connexionformc.php');
	}
	if (isset($_POST["mdp1"]) && isset($_POST["mdp2"])) {
		$mdp1 = $_POST["mdp1"];
		$mdp2 = $_POST["mdp2"];
		if ($mdp1 == $mdp2) {
			$mdphash = md5($mdp1);
			$sql = "UPDATE Personne SET mdp='$mdphash' WHERE idPersonne='$idp'";
			$requete = $bdd->prepare($sql);
			$requete->execute();
			header('Location: coordo.php');
		}
		else {
			$message = "Mots de passe diférents";
		}
	}
	else if(isset($_POST["mdp1"])) {
		$mdp1 = $_POST["mdp1"];
		if(md5($mdp1) == $result['mdp']) {
			header('Location: coordo.php');
		}
		else {
			$message = "Mot de passe non conforme";
		}
	}
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="NoS1gnal" />
    <link rel="stylesheet" href="connexionformc.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Connexion</title>
</head>

<body>
    <div class="login-form">
        <section class="vh-100 gradient-custom">
            <form action="connexion2formc.php" method="post">
                <div class="container py-5 h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                            <div class="card bg-light mb-3" style="border-radius: 1.5rem;">
                                <div class="card-body p-5 text-center">
                                    <img src="imgclubcine/logo_club_cinema.png" alt="logo" style="border-radius: 1.5rem;max-width:100%;height:auto">
                                    <div class="mb-md-5 mt-md-4 pb-5">&nbsp;
                                        <h2 class="fw-bold mb-2 text">Connexion</h2>&nbsp;
                                        <div class="form-outline form-white mb-4">
                                            <label class="form-label" for="mdp1">Mot de passe :</label>
                                            <input type="password" name="mdp1" class="form-control form-control-lg" required="required" autocomplete="off" />
                                        </div>
                                        <?php
                                        if ($notinit) {
                                        ?>
                                            <div class="form-outline form-white mb-4">
                                                <label class="form-label" for="mdp2">Première connexion : Retaper le mot de passe :</label>
                                                <input type="password" name="mdp2" class="form-control form-control-lg" required="required" autocomplete="off" />
                                            </div>
                                        <?php
                                        }
										echo $message . "</br>";
                                        ?>
                                        <button class="btn btn-outline-black btn-lg px-5" type="submit">Envoyer</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>
	</div>
</body>

</html>