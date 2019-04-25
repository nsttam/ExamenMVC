<!DOCTYPE html>
<html>
<head>
    <?php
    include 'Parts/stylesheets.html'
    ?>
</head>

<body>
<div class="container">
    <h1>Mise à jour d'un livre</h1>

    <a href="/ExamenPhpTamaraRavagnan/index.php?controller=index&action=renderIndex">
        <button type="button" class="btn btn-danger">Aller au HomePage</button>
    </a>

    <form method="post" action="index.php?controller=livre&action=updateLivre&id=<?php echo $livre->getId()?>">
        <label>Titre</label><input name="titre" class="form-control" value="<?php echo $livre->getTitre()?>">
        <label>Auteur</label><input name="auteur" class="form-control" value="<?php echo $livre->getAuteur()?>">
        <label>Categorie</label>
        <select name="categorie">
            <option value="science">Science</option>
            <option value="histoire">Histoire</option>
            <option value="roman">Roman</option>
        </select>
        <input class="btn btn-danger" type="submit" value="valider">
    </form>
</div>
<?php
include 'Parts/javascript.html'
?>
</body>
</html>
