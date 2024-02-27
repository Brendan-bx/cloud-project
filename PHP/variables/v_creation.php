<?php

$title = $_POST['title'];
$id = uniqid();
$user = $_POST['user'];
$category = $_POST['category'];
$desc = $_POST['desc'];
$date = date('d-m-Y H:i');
$content = $_POST['content'];


$article = array(
    'id' => $id,
    'title' => $title,
    'user' => $user,
    'category' => $category,
    'desc' => $desc,
    'date' => $date,
    'content' => $content
);
