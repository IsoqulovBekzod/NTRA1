<?php

declare(strict_types=1);

$email = $_POST['email'];
$password = $_POST['password'];


    if (isset($_POST['email']) && isset($_POST['password'])) {


        $login= (new \App\User())->login($email,$password);
        if ($login) {

            header('Location: /ads/create');

        }
        else {
            header('Location:/login/create');
        }


}




