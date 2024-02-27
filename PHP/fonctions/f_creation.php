<?php
require("../variables/v_creation.php");

$file = 'articles.json';
if (file_exists($file)) {
    $articles = json_decode(file_get_contents($file), true);
} else {
    $articles = array();
}

$articles[] = $article;

file_put_contents($file, json_encode($articles));

header("Location: /index.php");
