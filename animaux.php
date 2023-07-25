<?php
    require_once('utils/loadClass.php');

    $medor = new Chien(3, "rouge", "on sait pas trop", "médor");

    echo $medor->crie(). "<br />";
    echo $medor->info(). "<br />";
    echo $medor->infoPlus()."<br />";
    echo "j'ai ". $medor->getNbPattes()." pattes je m'appelle ". $medor->getNom();
?>