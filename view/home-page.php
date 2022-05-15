<?php

//echo '<pre>'; print_r($data); echo '</pre>';

?>


<?php foreach($data AS $dataArticle): ?>

    <div class="card" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title"><?= $dataArticle['titre']  ?></h5>
        <img src="" class="card-img-top" alt="..."><?= $dataArticle['photos']  ?></img>
         <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
    </div>

<?php endforeach; ?>


