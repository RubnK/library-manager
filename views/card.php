<?php
$card = getBookById($id['id']);
$shortdesc = "";
if(str_word_count($card['description'])>15){
    for($i=0;$i<15;$i++){
        $shortdesc .= ' '.explode(" ", $card['description'], 16)[$i];
    }
    $shortdesc.="...";
}
else{
    $shortdesc = $card['description'];
}
?>
<a href="/books/<?php echo $card['link'] ?>" class="card">
    <img src="../img/couv/<?php echo $card['link'].".webp" ?>"/>
    <div class="card-content">
        <h1><?php echo $card['titre'] ?></h1>
        <p class="card-author"><?php echo $card['auteur'] ?></p>
        <p class="card-genre"><?php echo $card['genre'] ?></p>
        <p><?php echo $shortdesc;?></p>
    </div>
</a>

<style>
    .card{
        width: 100%;
        box-sizing: border-box;
        margin: 2rem auto;
        box-shadow: 1px 3px 4px rgba(0, 0, 0, 0.2);
        overflow: hidden;
        display: flex;
        flex-direction: column;
        transition: transform 0.3s ease-in-out;
        color: black;
    }  
    .card:hover {
        transform: scale(1.02);
    }
    .card img {
        width: 100%;
        object-fit: cover;
        border-radius: 6px 6px 0 0;
    }
    .card-content {
        background-color: white;
        padding: 0.3rem 2rem 1rem 2rem;
    }
    .card-genre {
        display: inline-block;
        background-color: #36a9e0;
        color: white;
        border-radius: 15px;
        padding: 0 1rem;
        margin: 5px 0;
    }
    @media screen and (max-width: 600px) {
        .card img {
            height: 15rem;
        }
    }
    @media screen and (max-width: 450px) {
        .card img {
            height: 10rem;
        }
        .card h1 {
            font-size: 150%;
        }
        .card-content {
            background-color: white;
            padding: 0.3rem .5rem 1rem .5rem;
        }
    }
    @media screen and (max-width: 300px) {
        .card img {
            height: 7rem;
        }
        .card h1 {
            font-size: 130%;
        }
    }
    @media screen and (max-width: 220px) {
        .card img {
            height: 5rem;
        }
    }
</style>