<?php
if (isset($_POST['submit'])) {

    require("variables/v_inscription.php");
    foreach ($users as $user) {
        $existing_email = explode(":", $user)[0];
        if ($email == $existing_email) {
            echo "L'adresse email est déjà utilisée.";
            exit();
        }
    }

    $new_user = $email . ":" . $password . "\n";
    file_put_contents($file, $new_user, FILE_APPEND);

    echo "L'utilisateur a été enregistré avec succès !";
}
