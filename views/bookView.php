<div class = "page">
<h1><?= $book['titre'] ?></h1>
<p><?= $book['auteur'] ?></p>
<p>Description: <?= $book['description'] ?></p>
<p>Prix: <?= $book['prix'] ?></p>
<p>Genre: <?= $book['genre'] ?></p>
<p>ISBN: <?= $isbn ?></p>
</div>
<style>
.page{
    position: absolute;
    top: 100px;
    text-align:center;
    width:100%;
    z-index: 500;
}
</style>