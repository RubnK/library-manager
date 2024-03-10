<div class="page">
<h1>Aujouter un auteur</h1>
<form method="POST" action="add_author">
    <label for="nom">Nom : </label>
    <input type="text" name="nom" id="nom" required>
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