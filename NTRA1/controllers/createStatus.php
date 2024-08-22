<?php

declare(strict_types=1);

use App\Status;

if (isset($_POST['status']) && $_POST['status'] !== '') {

    $status = new Status();

    $result = $status->createStatus($_POST['status']);

    if ($result) {
        header('Location: /status/create');
    } else {
        echo "Statusni qo'shishda xatolik yuz berdi.";
    }
} else {
    echo "Status qiymatini kiriting.";
}
