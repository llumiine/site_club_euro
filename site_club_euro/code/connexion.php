
   
<?php 
    session_start(); // Démarrage de la session
    require_once 'config.php'; // On inclut la connexion à la base de données

    if(!empty($_POST['mail']) && !empty($_POST['mdp'])) // Si il existe les champs email, password et qu'il sont pas vident
    {
        // Patch XSS
        $mail = htmlspecialchars($_POST['mail']); 
        $password = htmlspecialchars($_POST['mdp']);
        
        $mail = strtolower($email); // email transformé en minuscule
        
        // On regarde si l'utilisateur est inscrit dans la table utilisateurs
        $check = $bdd->prepare('SELECT , mail, mdp, token FROM utilisateurs WHERE email = ?');
        $check->execute(array($mail));
        $data = $check->fetch();
        $row = $check->rowCount();
        
        

        // Si > à 0 alors l'utilisateur existe
        if($row > 0)
        {
            // Si le mail est bon niveau format
            if(filter_var($mail, FILTER_VALIDATE_EMAIL))
            {
                // Si le mot de passe est le bon
                if(password_verify($mdp, $data['mdp']))
                {
                    // On créer la session et on redirige sur landing.php
                    $_SESSION['user'] = $data['token'];
                    header('Location: landing.php');
                    die();
                }else{ header('Location: index.php?login_err=mdp'); die(); }
            }else{ header('Location: index.php?login_err=mail'); die(); }
        }else{ header('Location: index.php?login_err=already'); die(); }
    }else{ header('Location: index.php'); die();} // si le formulaire est envoyé sans aucune données