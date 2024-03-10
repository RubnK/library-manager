<div class="page">
    <h1>Utilisateurs</h1>
    <a href="/create_user">Créer un utilisateur</a>
    <table>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Téléphone</th>
            <th>Actions</th>
        </tr>
        <?php foreach($AllUsers as $user): ?>
            <tr>
                <td><?= $user['nom'] ?></td>
                <td><?= $user['prenom'] ?></td>
                <td><?= $user['mail'] ?></td>
                <td><?= $user['phone'] ?></td>
                <td>
                    <a href="/delete_user?id=<?= $user['id'] ?>">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
<style>
.page{
    position: absolute;
    top: 100px;
    text-align:left;
    width:100%;
    z-index: 500;
}
table{
    border-collapse: collapse;
    width: 100%;
}
th, td{
    border: 1px solid black;
    padding: 0.5rem;
}
th{
    background-color: #36a9e0;
    color: white;
}
</style>