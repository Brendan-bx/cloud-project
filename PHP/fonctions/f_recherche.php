<?php
function searchArticles($searchTerm)
{
    $articles = json_decode(file_get_contents('fonctions/articles.json'), true);

    $matchingArticles = array();

    foreach ($articles as $article) {
        if (stripos($article['title'], $searchTerm) !== false || stripos($article['content'], $searchTerm) !== false) {
            $matchingArticles[] = $article;
        }
    }

    return $matchingArticles;
}
