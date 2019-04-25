<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Mes Livres</title>
    <link href="style.css" rel="stylesheet" />
    <?php
    include 'Parts/stylesheets.html';
    ?>
</head>

<body>
<h1>Ma Liste de Livres</h1>
<a href="/ExamenPhpTamaraRavagnan/index.php?controller=livre&action=addForm"><button type="button" class="btn btn-danger">Ajouter un livre</button></a>


<table class="table">
    <thead class="thead-dark">
    <th scope="col">Id</th>
    <th scope="col">Titre</th>
    <th scope="col">Auteur</th>
    <th scope="col">Categorie</th>
    <th scope="col">Supprimer</th>
    <th scope="col">Modifier</th>
    </thead>

    <tbody>
    <?php
    foreach ($livres as $livre) {
    ?>
    <tr>
        <td><?php echo $livre->getId()?></td>
        <td><?php echo $livre->getTitre()?></td>
        <td><?php echo $livre->getAuteur()?></td>
        <td><?php echo $livre->getCategorie()?></td>
        <td>
            <a href="http://localhost/ExamenPhpTamaraRavagnan/index.php?controller=livre&action=delete&id=<?php echo $livre->getId()?>">Supprimer</a>
        </td>
        <td>
            <a href="http://localhost/ExamenPhpTamaraRavagnan/index.php?controller=livre&action=updateForm&id=<?php echo $livre->getId()?>">Modifier</a>
        </td>

    </tr>
    <?php
    }
    ?>



</body>
</html>