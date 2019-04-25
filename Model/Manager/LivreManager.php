<?php
class LivreManager extends DbManager {
    public function __construct()
    {
        parent::__construct(); //on prends le constructeur du parent, on se connecte a bdd
    }

    public function selectAll() //fx pour selectionner tous les livres
    {
        $livres = [];
        $sql =  'SELECT * FROM livre ORDER BY id';
        foreach  ($this->bdd->query($sql) as $row) {
            $livres[] = new Livre($row['id'], $row['titre'], $row['auteur'], $row['categorie']);
        }

        return $livres;
    }

    public function insert(Livre $livre)
    {
        $query = "INSERT INTO `livre`(`titre`, `auteur`, `categorie`) VALUES  ('". $livre->getTitre() ."', '". $livre->getAuteur() ."','". $livre->getCategorie() ."')";
        $this->bdd->query($query);
    }

    public function delete($id)
    {
        $query = $this->bdd->prepare("DELETE FROM livre where id = ?");
        $query->bindParam(1,$id);
        $query->execute();
    }

    public function select($id)
    {
        $query = $this->bdd->prepare("SELECT * FROM livre WHERE id=?");
        $query->bindParam(1, $id);
        $query->execute();
        $res = $query->fetch();
        $livre = new Livre($res['id'], $res['titre'], $res['auteur'], $res['categorie']);

        return $livre;
    }

    public function update(Livre $livre)
    {
        $query = $this->bdd->prepare("UPDATE  livre SET titre =? , auteur = ?, categorie = ?");
        $query->bindParam(1, $livre->getTitre());
        $query->bindParam(2, $livre->getAuteur());
        $query->bindParam(3, $livre->getCategorie());
        $query->execute();
    }

}
?>