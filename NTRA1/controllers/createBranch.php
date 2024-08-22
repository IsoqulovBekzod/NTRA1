<?php

declare(strict_types=1);

use App\Branch;

if (isset($_POST['name']) && $_POST['name'] !== '' && isset($_POST['address']) && $_POST['address'] !== '') {

    $branch = new Branch();

    $result = $branch->createBranch($_POST['name'], $_POST['address']);

    if ($result) {
        header('Location: /branch/create');
        exit;
    } else {
        echo "Branchni qo'shishda xatolik yuz berdi.";
    }
} else {
    echo "Branch qiymatini kiriting.";
}
