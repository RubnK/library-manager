<div class = "page">
<h1><?= $book['titre'] ?></h1>
<h2 class="auteur"><?= $book['auteur'] ?></h2>
<div class="book">
    <img src="../img/couv/<?= $book['link'] ?>.webp" alt="<?= $book['titre'] ?>">
    <div class = "infos">
        <p><?= nl2br($book['description']) ?></p>
        <p>Prix: <?= $book['prix'] ?>€</p>
        <p>Genre: <?= $book['genre'] ?></p>
        <p>ISBN: <?= $isbn ?></p>
        <div class="actions">
            <a href="/edit_book?id=<?= $book['id'] ?>">Modifier</a><br>
            <a href="/delete_book?id=<?= $book['id'] ?>&link=<?= $book['link'] ?>">Supprimer</a>
        </div>
    </div>
</div>

<div class="emprunts">
    <h2>Emprunts</h2>
    <br>
    <form method="POST" action="/emprunter">
        <input type="hidden" name="book" value="<?= $book['id'] ?>">
        <label for="user">Utilisateur : </label>
        <select name="user" id="user" required>
            <?php foreach($users as $user): ?>
                <option value="<?= $user['id'] ?>"><?= $user['prenom'].' '.$user['nom'] ?></option>
            <?php endforeach; ?>
        </select>
        <label for="date">Date : </label>
        <input type="date" name="date" id="date" value="<?= $date ?>" required>
        <input type="submit" value="Emprunter">
    </form>
    <br>
    <table>
        <tr>
            <th>Nom</th>
            <th>Date</th>
            <th>Retour</th>
        </tr>
        <?php foreach(array_reverse($emprunts) as $emprunt): ?>
        <tr>
            <td><?= $emprunt['prenom'].' '.$emprunt['nom'] ?></td>
            <td><?= date("d/m/Y", strtotime($emprunt['date']));?></td>
            <td><?php if ($emprunt['returned']==0){echo '<a href="/return_book?id='.$book['id'].'&emprunt_id='.$emprunt[0].'">Rendre</a>';} else{echo '<i>Déjà rendu</i>';} ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>

</div>
<style>
.page{
    position: absolute;
    top: 100px;
    text-align:center;
    width:100%;
    z-index: 500;
}
img{
    width: 20%;
    height: auto;
}
.auteur{
    font-size: 1.5rem;
    font-weight: 500;
}
.book{
    display: flex;
    flex-direction: row;
    margin: 1rem;
}
.infos{
    display: flex;
    flex-direction: column;
    text-align:left;
    margin: 1rem;
}
.infos p{
    margin: 0.5rem;
}
.emprunts{
    margin: 1rem;
    text-align: left;
}
table{
    border-collapse: collapse;
}
table, th, td{
    border: 1px solid black;
    padding: 0.5rem;
}
</style>