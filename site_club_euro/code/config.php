<?php
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=cineclap;charset=utf8', 'root', '');
        //echo 'okay';
    }catch(Exception $e) {
        die('Erreur'.$e->getMessage());
    }
?>