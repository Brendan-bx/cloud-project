<?php

function login($email, $password)
{
    $file = "users.txt";
    $contents = file_get_contents($file);
    $users = explode("\n", $contents);
    foreach ($users as $user) {
        $user_data = explode(":", $user);
        $existing_email = $user_data[0];
        $existing_password = $user_data[1];
        if ($email == $existing_email && $password == $existing_password) {
            return true;
        }
    }
    return false;
}
