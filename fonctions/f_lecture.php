<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    echo "ID de l'article manquant.";
}

$articlesJson = file_get_contents('fonctions/articles.json');
$articles = json_decode($articlesJson, true);
$article = null;
foreach ($articles as $a) {
    if ($a['id'] == $id) {
        $article = $a;
        break;
    }
}

echo '<h1>' . $article['title'] . '</h1>';
echo '<p>' . nl2br($article['content']) . '</p>';
echo '<p>Publié le ' . $article['date'] .  ' par ' . $article['user'] . '</p>';
?>
<h2>Espace commentaire :</h2>
<form method="POST">
    <div class="col-md-2">
        <label for="username" class="form-label">Nom d'utilisateur :</label>
        <input type="text" name="username" id="username" class="form-control" value="<?php echo isset($username) ? $username : ''; ?>" required>
        <br>
    </div>
    <div class="col-md-6">
        <label for="comment" class="form-label">Commentaire :</label>
        <textarea name="comment" id="comment" class="form-control" required><?php echo isset($comment) ? $comment : ''; ?></textarea>
        <br>
    </div>
    <button type="submit" class="btn btn-primary">Envoyer</button>
</form>