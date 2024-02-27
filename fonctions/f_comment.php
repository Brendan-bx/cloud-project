<?php
$articleId = isset($_GET['id']) ? $_GET['id'] : '';


if (empty($articleId)) {
    echo 'Identifiant de l\'article invalide';
    exit;
}

$commentsFile = 'comments/comments_' . $articleId . '.json';
$comments = file_exists($commentsFile) ? json_decode(file_get_contents($commentsFile), true) : array();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $newComment = array(
        'username' => $_POST['username'],
        'comment' => $_POST['comment']
    );
    $comments[] = $newComment;
    file_put_contents($commentsFile, json_encode($comments));
}

if (!empty($comments)) {
    echo '<h2>Commentaires</h2>';
    echo '<ul>';
    foreach ($comments as $comment) {
        echo '<li>';
        echo '<strong>' . $comment['username'] . '</strong> : ' . $comment['comment'];
        echo '</li>';
    }
    echo '</ul>';
}
