<?php
//session_start();
//if(!isset($_SESSION["idpers"])) {
//	header('Location: index.php');
//}

require_once('config.php');
if (isset($_POST['idFilm'])) {
    $idf=$_POST['idFilm'];
    $sql = "SELECT titreVF,titreVO,affiche,annee,realisateur,duree,lienvideoAlloCine,lienIMDB,synopsisVF,synopsisVO FROM film WHERE idFilm='$idf'";
    $requete = $bdd->prepare($sql);
    $requete->execute();
    $resultfilm = $requete->fetch();
    
	
    $sql = "SELECT pays.idPays FROM pays INNER JOIN paysFilm ON pays.idPays=paysFilm.idPays WHERE idFilm='$idf'";
    $requete = $bdd->prepare($sql);
    $requete->execute();
    $resultpays= $requete->fetchAll();
	
    $sql = "SELECT genre.idGenre FROM genre INNER JOIN genreFilm ON genre.idGenre=genreFilm.idGenre WHERE idFilm='$idf'";
    $requete = $bdd->prepare($sql);
    $requete->execute();
    $resultgenre= $requete->fetchAll();
	
	$sql = "SELECT idPays,nomPays FROM pays ORDER BY nomPays";
	$requete = $bdd->prepare($sql);
	$requete->execute();
	while ($ligne = $requete->fetch()) {
		$result[] = $ligne;
	}

	$sql = "SELECT idGenre,nomGenre FROM genre ORDER BY nomGenre ";
	$requete = $bdd->prepare($sql);
	$requete->execute();
	while ($ligne = $requete->fetch()) {
		$result1[] = $ligne;
	}
}

if (isset($_POST['filmvf'])
    && isset($_POST['filmvo'])
    && isset($_POST['annee'])
    && isset($_POST['realisateur'])
    && isset($_POST['duree'])
    && isset($_POST['lienvideoAlloCine'])
    && isset($_POST['lienIMDB'])
    && isset($_POST['synopsisvf'])
    && isset($_POST['synopsisvo'])) {

    $idf=$_POST['idf'];
    $filmvf = addslashes($_POST['filmvf']);
    $filmvo = addslashes($_POST['filmvo']);
    if ($_FILES["affiche"]["name"] == ""){
        $affiche = addslashes($_POST["afficheold"]);
    }
    else{
        $affiche = addslashes($_FILES["affiche"]["name"]);
    }
    
    $annee = addslashes($_POST['annee']);
    $realisateur = addslashes($_POST['realisateur']);
    $duree = addslashes($_POST['duree']);
    $lienvideoAlloCine = addslashes($_POST['lienvideoAlloCine']);
    $lienIMDB = addslashes($_POST['lienIMDB']);
    $synopsisvf = addslashes($_POST['synopsisvf']);
    $synopsisvo = addslashes($_POST['synopsisvo']);
    
    $sql = "UPDATE film SET titreVO='$filmvo', titreVF='$filmvf', annee='$annee', realisateur='$realisateur', duree='$duree',affiche='$affiche', lienvideoAlloCine='$lienvideoAlloCine', lienIMDB='$lienIMDB',synopsisVO='$synopsisvo', synopsisVF='$synopsisvf' WHERE idFilm='$idf'";
    $requete = $bdd->prepare($sql);
    $requete->execute();

    for ($i = 1; $i <=4 ; $i++){
        if (isset($_POST["Pays$i"])){
            $Pays=$_POST["Pays$i"];
            $oldPays=$_POST["oldPays$i"];
			if($Pays != $oldPays) {
				$sql = "UPDATE paysFilm SET idPays='$Pays' WHERE idFilm='$idf' AND idPays='$oldPays' ";
				$requete = $bdd->prepare($sql);
				$requete->execute();
			}
        }
	}
	
    for ($i = 1; $i <=4 ; $i++){
        if (isset($_POST["Genre$i"])){
            $Genre=$_POST["Genre$i"];
            $oldGenre=$_POST["oldGenre$i"];
			if($Genre != $oldGenre) {
                $sql = "UPDATE genreFilm SET idGenre='$Genre' WHERE idFilm='$idf' AND idGenre='$oldGenre' ";
                $requete = $bdd->prepare($sql);
                $requete->execute();
			}
        }
	}

    if ($_FILES["affiche"]["name"] != "") {
        $dir = "imgclubcine/affiche/";
        $fiche = $dir . basename($_FILES["affiche"]["name"]);
        $check = getimagesize($_FILES["affiche"]["tmp_name"]);
        if ($check !== false) {
            move_uploaded_file($_FILES["affiche"]["tmp_name"], $fiche);
        } else {
            echo "Ce n'est pas une image.";
        }
    }
}

function affiche_annee($a)
{
    $an = date("Y");
    for ($i = 1895; $i <= $an; $i++) {
        if ($i == $a)
            echo "<option value=" . $i . " selected=selected>" . $i . "</option>";
        else
            echo "<option  value=" . $i . ">" . $i . "</option>";
    }
}

$sql = "SELECT idFilm,titreVF FROM film ORDER BY titreVF ";
$requete = $bdd->prepare($sql);
$requete->execute();
while ($ligne = $requete->fetch()) {
    $result2[] = $ligne;
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
    <section id=timeline>
        <h1>Club Cinéma Européen</h1>
        <p class="leader">Modification d'un film</p>
        <form method="post" action="film2.php" enctype="multipart/form-data">
        <select class="form-select" aria-label="Default select example" name="idFilm">
           <option>---</option> 
            <?php
            for ($i = 0; $i < count($result2); $i++) {
                echo '<option  value="' . $result2[$i]["idFilm"] . '">' . $result2[$i]["titreVF"] . '</option>';
            }
            ?>
        </select>
        <input type="submit" value="Valider">
        </form>
	<?php 
	if (isset($_POST['idFilm'])){
	?>
        <form method="post" action="film2.php" enctype="multipart/form-data">
            <table class="table table-striped">
                <thead>
                </thead>
                <tbody>
                    <tr>
                        <td>Titre film VF</td>
                        <td>
                            <input type="hidden" value="<?php echo $idf;  ?>" name="idf">
							<input type="text" value="<?php echo $resultfilm["titreVF"] ?>" name="filmvf">
                        </td>
                    </tr>
                    <tr>
                        <td>Titre film VO</td>
                        <td>
                            <input type="text" 
                            value="<?php echo $resultfilm["titreVO"] ?>" name="filmvo">
                        </td>
                    </tr>
                    <tr>
                        <td>Affiche</td>
                        <td>
                            <input type="file"  name="affiche" id="affiche">
                            <input type="hidden"  name="afficheold" value="<?php echo $resultfilm["affiche"]; ?>">
                            <?php echo $resultfilm["affiche"] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Année</td>
                        <td>
                            <select class="form-select" aria-label="Default select example" name="annee">
                                <?php
                                affiche_annee($resultfilm["annee"]);
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Pays</td>
							<?php for ($j = 0; $j <count($resultpays) ; $j++){
                              ?>
                        <td>
							<input type="hidden" value="<?php echo $resultpays[$j]["idPays"];  ?>" name="oldPays<?php echo ($j+1); ?>">
                            <select class="form-select" aria-label="Default select example" name="Pays<?php echo ($j+1); ?>">
                                <?php
                                for ($i = 0; $i < count($result); $i++) {
                                    if($result[$i]["idPays"]==$resultpays[$j]["idPays"]){
                                        echo '<option selected=selected  value="' . $result[$i]["idPays"] . '">' . $result[$i]["nomPays"] . '</option>';
                                    }
                                    else{
                                        echo '<option  value="' . $result[$i]["idPays"] . '">' . $result[$i]["nomPays"] . '</option>'; 
                                    }
                                }
                                ?>
                            </select>
                        </td>
                        <?php } ?>
                    <tr>
                        <td>Genre</td>
							<?php for ($j = 0; $j <count($resultgenre) ; $j++){
                            ?>
                        <td>
							<input type="hidden" value="<?php echo $resultgenre[$j]["idGenre"];  ?>" name="oldGenre<?php echo ($j+1); ?>">
                            <select class="form-select" aria-label="Default select example" name="Genre<?php echo ($j+1); ?>">
                                <?php
                                for ($i = 0; $i < count($result1); $i++) {
                                    if($result1[$i]["idGenre"]==$resultgenre[$j]["idGenre"]){
                                        echo '<option selected=selected  value="' . $result1[$i]["idGenre"] . '">' . $result1[$i]["nomGenre"] . '</option>';
                                    }
                                    else{
                                        echo '<option  value="' . $result1[$i]["idGenre"] . '">' . $result1[$i]["nomGenre"] . '</option>'; 
                                    }
                                }
                                ?>
                            </select>
                        </td>
                        <?php } ?>
                    <tr>
                        <td>Réalisateur </td>
                        <td>
                            <input type="text" value="<?php echo $resultfilm["realisateur"] ?>" name="realisateur">
                        </td>
                    </tr>
                    <tr>
                        <td>Durée</td>
                        <td>
                            <input type="text" value="<?php echo $resultfilm["duree"] ?>" name="duree">
                        </td>
                    </tr>
                    <tr>
                        <td>Lien Vidéo AlloCiné</td>
                        <td>
                            <input type="text" size="70"value="<?php echo $resultfilm["lienvideoAlloCine"] ?>" name="lienvideoAlloCine">
                        </td>
                    </tr>
                    <tr>
                        <td>Lien IMDB</td>
                        <td>
                            <input type="text" size="70" value="<?php echo $resultfilm["lienIMDB"] ?>" name="lienIMDB">
                        </td>
                    </tr>
                    <tr>
                        <td>Pitch VF</td>
                        <td>
                            <input type="text" value="<?php echo $resultfilm["synopsisVF"] ?>"  name="synopsisvf">
                        </td>
                    </tr>
                    <tr>
                        <td>Pitch VO</td>
                        <td>
                            <input type="text"  value="<?php echo $resultfilm["synopsisVO"] ?>" name="synopsisvo">
                        </td>
                    </tr>
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