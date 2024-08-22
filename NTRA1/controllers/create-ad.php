<?php

use App\Branch;


$branchObj = new Branch();
$branches = $branchObj->getAllBranches();
loadView('dashboard/create-ad', ['branches' => $branches]);
