<?php
$file = 'fonctions/articles.json';
if (file_exists($file)) {
    $articles = json_decode(file_get_contents($file), true);
} else {
    $articles = array();
}

usort($articles, function ($a, $b) {
    return strtotime($b['date']) - strtotime($a['date']);
}); ?>

<div class="row row-cols-1 row-cols-md-3 g-4">
    <?php foreach ($articles as $article) { ?>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h2 class="card-title"><?= $article['title'] ?></h2>
                <h6 class="card-subtitle mb-2 text-muted">écrit le <?= $article['date'] ?> par <?= $article['user'] ?></h6>
                <p class="card-text"><?= $article['desc'] ?></p>
                <p class="card-text">Catégorie : <?= $article['category'] ?></p>
                <a href="lecture.php?id=<?= $article['id'] ?>" class="card-link">Lire la suite</a>
            </div>
        </div>
    <? } ?>
</div>