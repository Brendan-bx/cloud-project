<?php
$json = file_get_contents('fonctions/articles.json');


$articles = json_decode($json, true);

echo '<form method="GET">';
echo '<label for="category">Choisissez une catégorie :</label>';
echo '<select name="category" id="category">';
$categories = array();
foreach ($articles as $article) {
    $categories[] = $article['category'];
}
$categories = array_unique($categories);
sort($categories);
foreach ($categories as $category) {
    echo '<option value="' . $category . '">' . $category . '</option>';
}
echo '</select>';
echo '<button type="submit">Rechercher</button>';
echo '</form>';

if (isset($_GET['category'])) {
    $category = $_GET['category'];

    foreach ($articles as $article) {
        if ($article['category'] === $category) {
            echo '<h2>' . $article['title'] . '</h2>';
            echo '<p>' . $article['desc'] . '</p>';
            echo '<a href="lecture.php?id=' . $article['id'] . '">' . 'Voir la suite' . '</a>';
            echo '
<hr>';
        }
    }
}
