<?php

use App\Branch;


$branchObj = new Branch();
$branches = $branchObj->getAllBranches();

loadView('branches', ['ads' => $branches]);


