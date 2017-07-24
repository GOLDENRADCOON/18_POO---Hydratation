<?php

class BddManager {
    public function __CONSTRUCT(){

    }

    public function connectToBdd(){

        if (empty($this->bdd)){
            try {
            $this->bdd = new PDO('mysql:host=localhost;dbname=ikea;charset=utf8', 'root', 'root');
            $this->bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
                catch (Exception $e){
                    die('ERROR :'. $e->getMessage());
                }
        }
    }

    public function getProduitbyId($id){
        $this->connectToBdd();

        $request = $this->bdd->prepare('SELECT * FROM product WHERE id=:id');
        $request->execute(array(
            'id'=>$id
        ));
        $produits = $request->fetchAll(PDO::FETCH_ASSOC);

        return new Produit($produits[0]);
    }


}
?>