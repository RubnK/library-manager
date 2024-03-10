<div class="page">
    <h1 class="titre">Livres</h1>
    <form method="GET" class="searchfilter" action="/books">
        <div class="search-wrap">
            <input type="search" name="search" class="search-input" value="<?php if(isset($search)){echo $search;}?>" placeholder="Recherche">
            <button type="submit" class="search-btn"><svg xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 512 512"><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg></button>
        </div>
    </form>
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
    <ul class="pagination">
        <li class="page-item">
            <a href="/books?search=<?= $_GET['search'] ?>&page=<?= $currentPage - 1 ?>" class="page-link <?= ($currentPage <= 1) ? "disabled" : "" ?>">< Précédente</a>
        </li>
        <?php for($page = 1; $page <= $pages; $page++): ?>
        <li class="page-item <?= ($currentPage == $page) ? "active" : "" ?>">
            <a href="/books?search=<?= $_GET['search'] ?>&page=<?= $page ?>" class="page-link"><?= $page ?></a>
        </li>
        <?php endfor ?>
        <li class="page-item <?= ($currentPage >= $pages) ? "disabled" : "" ?>">
            <a href="/books?search=<?= $_GET['search'] ?>&page=<?= $currentPage + 1 ?>" class="page-link <?= ($currentPage >= $pages) ? "disabled" : "" ?>">Suivante ></a>
        </li>
    </ul>
    <br>
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
.nobook{
    position: absolute;
    justify-self: center;
    margin: 4rem;
    font-size: 1.5rem;
}
.searchfilter{
    margin-top: 1rem;
    display: flex;
    flex-direction: row;
    margin-left: 7%;
}
.search-wrap{   
    display: flex;
}
.search-btn{
    width: 40px;
    height: 36px;
    border: 1px solid #36a9e0;
    background: #36a9e0;
    color: #fff;
    border-radius: 0 5px 5px 0;
    cursor: pointer;
}
.filter-wrap{
    display: flex;
    line-height: 36px;
}
.filter-wrap select{
    cursor: pointer;
    height: 36px;
    margin-left: 4px;
}
.search-input{
    width: 15rem;
}
.disabled{
    display:none;
}
.pagination li{
    display: inline;
    margin: 0 0.5rem;
}
@media screen and (max-width: 1200px) {
    .catalogue{
        grid-template-columns : repeat(2,51%)
    }
}
@media screen and (max-width: 900px) {
    .catalogue{
        grid-template-columns : repeat(1,80%)
    }
    .searchfilter{
        flex-direction: column;
        align-items: center;
    }
    .search-wrap{
        margin-bottom: 1rem;
    }
}
</style>
