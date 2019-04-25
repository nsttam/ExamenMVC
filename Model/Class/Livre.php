<?php
class Livre{ //Creation class livre
    private $id;
    private $titre;
    private $auteur;
    private $categorie;

    /**
     * Livre constructor.
     */
    public function __construct($id = null, $titre, $auteur, $categorie)
    {
        $this->id = $id;
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->categorie = $categorie;
    }

    /**
     * @return null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param null $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return null
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @param null $titre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    /**
     * @return null
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * @param null $auteur
     */
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;
    }

    /**
     * @return null
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * @param null $categorie
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
    }




















    }






?>