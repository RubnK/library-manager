<div class="page">
<h1>Ajouter un livre</h1>
<form method="POST" action="add_book.php">
    <div class="addBookForm">
        <label for="titre">Titre : </label>
        <input type="text" name="titre" id="titre" required>
    </div>
    <div class="addBookForm">
        <label for="auteur">Auteur : </label>
        <select name="auteur" id="auteur" required>
            <?php foreach($auteurs as $auteur){ ?>
                <option value="<?= $auteur['id'] ?>"><?= $auteur['nom'] ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="addBookForm">
        <label for="genre">Genre : </label>
        <select name="genre" id="genre" required>
            <?php foreach($genres as $genre){ ?>
                <option value="<?= $genre['id'] ?>"><?= $genre['nom'] ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="addBookForm">
        <label for="description">Description : </label>
        <textarea name="description" id="description" required></textarea>
    </div>
    <div class="addBookForm">
        <label for="image">Image : </label>
        <input type="file" name="image" id="image">
    </div>
    <div class="addBookForm">
        <label for="prix">Prix : </label>
        <input type="number" name="prix" id="prix" step="0.01" required>
    </div>
    <div class="addBookForm">
        <label for="isbn">ISBN : </label>
        <input type="text" name="isbn" id="isbn" required>
    </div>
    <input type="submit" value="Ajouter">
</form>
</div>
<style>
.page{
    position: absolute;
    top: 100px;
    text-align:center;
    width:100%;
    z-index: 500;
}
.addBookForm{
    margin: 1rem;
}
</style>