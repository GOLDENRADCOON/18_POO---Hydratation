<?php

class Produit {

    protected $_id; 
    protected $_nom;
    protected $_description;
    protected $_prix;
    protected $_couleur;

    public function __CONSTRUCT($donnees = array()){
        $this->hydrate($donnees);
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->_id;
    }
    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->_id = $id;
    }
    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->_nom;
    }
    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->_nom = $nom;
    }
    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->_description;
    }
    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->_description = $description;
    }
    /**
     * @return mixed
     */
    public function getPrix()
    {
        return $this->_prix;
    }
    /**
     * @param mixed $prix
     */
    public function setPrix($prix)
    {
        $this->_prix = $prix;
    }




    public function getCouleur()
    {
        return $this->_couleur;
    }

    public function setCouleur($couleur)
    {
        $this->_couleur = $couleur;
    }





    public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value) {

            //Ici, je remplace les underscore
            $key = preg_replace("#_#", "", $key);

            $method = "set".ucfirst($key);
            
            if (method_exists($this, $method)){
                $this->$method($value);
            }
        }
    }
  //accesseur mutateur --> getters et les setters
}
?>