<?php

include 'bddmanager.php';
include 'produit.php';
include 'promo.php';

$bdd = new BddManager();
$bdd->getProduitbyId(1);
var_dump($bdd->getProduitbyId(1));
?>