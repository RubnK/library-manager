<div class="page">
    <h1>Livres empruntés</h1>
    <table>
        <tr>
            <th>Titre</th>
            <th>Emprunteur</th>
            <th>Date</th>
            <th>Retour</th>
        </tr>
        <?php foreach($emprunts as $emprunt): ?>
            <tr>
                <td><?= $emprunt['titre'] ?></td>
                <td><?= $emprunt['prenom'].' '.$emprunt['nom'] ?></td>
                <td><?= date("d/m/Y", strtotime($emprunt['date']));?></td>
                <td><?php if ($emprunt['returned']==0){echo '<a href="/return_book?id='.$emprunt['book_id'].'&emprunt_id='.$emprunt['id'].'">Rendre</a>';} else{echo '<i>Déjà rendu</i>';} ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <?php if(empty($emprunts)): ?>
        <p>Aucun livre n'a été emprunté</p>
    <?php endif; ?>
</div>
<style>
.page{
    position: absolute;
    top: 100px;
    text-align:left;
    width:96%;
    padding: 2%;
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