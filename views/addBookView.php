<div class="page">
<h1>Ajouter un livre</h1>
<form method="POST" action="add_book" enctype="multipart/form-data">
        <label for="titre">Titre : </label>
        <input type="text" name="titre" id="titre" required>
        <label for="auteur">Auteur : </label>
        <select name="auteur" id="auteur" required>
            <?php foreach($auteurs as $auteur){ ?>
                <option value="<?= $auteur['id'] ?>"><?= $auteur['nom'] ?></option>
            <?php } ?>
        </select>
        <label for="genre">Genre : </label>
        <select name="genre" id="genre" required>
            <?php foreach($genres as $genre){ ?>
                <option value="<?= $genre['id'] ?>"><?= $genre['nom'] ?></option>
            <?php } ?>
        </select>
        <label for="description">Description : </label>
        <textarea name="description" id="description" required></textarea>
        <label for="image">Image : </label>
        <input type="file" name="image" id="image">
        <label for="prix">Prix : </label>
        <input type="number" name="prix" id="prix" step="0.01" required>
        <label for="isbn">ISBN : </label>
        <input type="text" name="isbn" id="isbn" minlength="13" maxlength="13" required>
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
form{
    display: flex;
    flex-direction: column;
    width: 30%;
    margin: auto;
}
label{
    margin-top: 0.5rem;
    margin-left: 0.5rem;
    text-align: left;
}
form input, form select, form textarea{
    margin: 0.5rem;
    padding: 0.5rem;
}
</style>