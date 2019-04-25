<?php
include 'include.php';
if($_GET['controller'] === 'index' && $_GET['action'] == 'renderIndex'){
    $indexController = new IndexController();
    $indexController->renderIndexAction();  //Permet l'affichage de la liste de livres, car renderIndexAction obtiens tous les livres grace a selectAll
}  else if($_GET['controller'] === 'livre' && $_GET['action'] === 'addForm'){
    $livreController = new LivreController();
    $livreController->addForm(); //on va sur addForm.php
}
else if($_GET['controller'] === 'livre' && $_GET['action'] === 'addLivre'){
    $livreController = new LivreController();
    $livreController->persist(); //Ajout de livre

}
else if($_GET['controller'] === 'livre' && $_GET['action'] === 'delete' && isset($_GET['id'])){
    $livreController = new LivreController();
    $livreController->delete($_GET['id']);
}
else if($_GET['controller'] === 'livre' && $_GET['action'] === 'updateForm' && isset($_GET['id'])){
    $livreController = new LivreController();
    $livreController->updateForm($_GET['id']);
}
else if($_GET['controller'] === 'livre' && $_GET['action'] === 'updateArticle' && isset($_GET['id'])){
    $livreController = new LivreController();
    $livreController->updateLivre($_GET['id']);
}else {
    $exception = new Exception("La page n'existe pas", 404);
    throw  $exception;
}
?>