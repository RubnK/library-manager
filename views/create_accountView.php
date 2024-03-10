<div class="page">
<h1>Créer un utilisateur</h1>
<form method="POST" action="add_user">
    <label for="nom">Nom : </label>
    <input type="text" name="nom" id="nom" required>
    <label for="prenom">Prénom : </label>
    <input type="text" name="prenom" id="prenom" required>
    <label for="email">Email : </label>
    <input type="email" name="email" id="email" required>
    <label for="phone">Numéro de téléphone : </label>
    <input type="tel" name="phone" id="phone" required>
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