<?php

// echo '<pre>'; print_r($data); echo '</pre>';

?>


<div class="container text-center mt-5">
    <div class="card" style="width: 18rem; margin: 0 auto;">
        
        <div class="card-body">
            <h5 class="card-title"><?= $data['titre'] . ' ' . $data['auteur'] ?></h5>
            <ul style="list-style: none;">
                <li><b>Id_article</b> : <?= $data['id_articles'] ?></li>
                <li><b>Date</b> : <?= $data['date'] ?></li>
                <li><b>Photos</b> : <?= $data['photos'] ?></li>
                <li><b>Categorie</b> : <?= $data['categorie'] ?></li>
                <li><b>Mots clés :</b> : <?= $data['mots_cles'] ?></li>
               
            </ul>
            <a href="?op=delete&id=<?= $data[$id] ?>" class="btn btn-danger mt-4" onclick="return(confirm('Vous êtes sur le point de supprimer cet article. En êtes vous certain ?'))">Supprimer</a>
        </div>
    </div>

    <div class="container text-center mt-4">
        <a href="?op=null" class="btn btn-primary mt-4">Retour à l'index des articles</a>
    </div>

</div>