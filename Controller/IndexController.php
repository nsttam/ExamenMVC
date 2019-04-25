<?php
class indexController{ //pour selectioner
    public function renderIndexAction(){ //
        $livreManager = new LivreManager(); //je fabrique livremanager, j'ai envoie des nouveaux livres dans la vue
        $livres = $livreManager->selectAll();
        require 'Vue/homeview.php';
    }
}
?>