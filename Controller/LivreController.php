<?php
class LivreController{

    public function addForm() //Pour afficher page ou on a le form pour ajouter un livre
    {
        require 'Vue/addForm.php';
    }

    public function persist()
    {
        $livre = new Livre(null, $_POST['titre'], $_POST['auteur'], $_POST['categorie'] );
        $livreManager = new LivreManager();
        $livreManager->insert($livre);
        header('http://localhost/ExamenPhpTamaraRavagnan/index.php?controller=index&action=renderIndex');
    }

    public function delete($id)
    {
        $livreManager = new LivreManager();
        $livreManager->delete($id);
        header('http://localhost/ExamenPhpTamaraRavagnan/index.php?controller=index&action=renderIndex');
    }

    public function updateForm($id)
    {
        $livreManager = new LivreManager();
        $livre = $livreManager->select($id);

        require 'Vue/updateForm.php';
    }

    public function updateLivre($id)
    {
        $livreManager = new LivreManager();
        $livre = $livreManager->select($id);
        $livre = new Livre($id, $_POST['titre'], $_POST['auteur'], $_POST['categorie'] );
        $livreManager->update($livre);

        header('http://localhost/ExamenPhpTamaraRavagnan/index.php?controller=index&action=renderIndex');

    }
}
