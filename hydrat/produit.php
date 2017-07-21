<?php

class Produit {

    protected $_id; 
    protected $_nom;
    protected $_description;
    protected $_prix;
    protected $_couleur;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }
    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
    /**
     * @return mixed
     */
    public function getPrix()
    {
        return $this->prix;
    }
    /**
     * @param mixed $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }
    /**
     * @return mixed
     */
    public function getCouleur()
    {
        return $this->couleur;
    }
    /**
     * @param mixed $couleur
     */
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;
    }

    public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value) {

            //Ici, je remplace les underscore
            $key = preg_replace("_","",$key);

            $method = "set".ucfirst($key);
            
            if (method_exists($this, $method)){
                $this->setId($value);
            }
        }
    }
  //accesseur mutateur --> getters et les setters
}
?>