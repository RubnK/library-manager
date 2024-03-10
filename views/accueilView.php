<div class="page">
    <h1 class="titre">Livres les plus lus</h1>
    <div class="catalogue">
        <?php
        if(empty($AllBooks)){
            echo "<p class='nobook'>Aucun livre trouvé.</p>";
        }
        else{
            foreach($AllBooks as $id){
                include "../views/card.php";
            }
        }
        ?>
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
.catalogue{
    display: grid;
    grid-template-columns: repeat(3,25%);
    justify-content:space-evenly;
}
</style>
