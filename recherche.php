<?php
require("layout/header.php");
require("fonctions/f_recherche.php"); ?>

<form action="recherche.php" method="get">
    <label for="searchTerm">Rechercher des articles:</label>
    <input type="text" id="searchTerm" name="q">
    <button type="submit">Rechercher</button>
</form>

<?php
$searchTerm = isset($_GET['q']) ? $_GET['q'] : '';

$matchingArticles = searchArticles($searchTerm);

if (!empty($matchingArticles)) {
    echo '<h2>Résultats de la recherche pour "' . $searchTerm . '"</h2>';
    echo '<ul>';
    foreach ($matchingArticles as $article) {
        echo '<li>';
        echo '<a href="lecture.php?id=' . $article['id'] . '">' . $article['title'] . '</a>';
        echo '</li>';
    }
    echo '</ul>';
}
require("layout/footer.php");
