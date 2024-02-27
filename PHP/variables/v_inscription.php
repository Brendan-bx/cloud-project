<?php
$email = $_POST['email'];
$password = $_POST['password'];
$file = "users.txt";
$contents = file_get_contents($file);
$users = explode("\n", $contents);
