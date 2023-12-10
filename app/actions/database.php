<?php
try{
    $bdd = new PDO('mysql:host=;dbname=;charset=utf8;', '', '');
}catch(Exception $e){
    die('Une erreur a été trouvée : ' . $e->getMessage());
}