<?php

declare(strict_types=1);

use App\Router;

Router::get('/', fn()=> loadController('home'));

Router::get('/ads/{id}', function (int $id) {
    loadController('showAd', ['id'=>$id]);
});

Router::get('/ads/create', fn()=> loadController('create-ad'));
Router::post('/ads/create', fn()=> loadController('createAd'));


Router::get('/status/create', fn()=> loadView('dashboard/create-status'));
Router::post('/status/create', fn()=> loadController('createStatus'));

Router::get('/branch/create', fn()=> loadView('dashboard/create-branch'));
Router::post('/branch/create', fn()=> loadController('createBranch'));

Router::get('/branches', fn()=> loadController('branches'));

Router::get('/login/create', fn()=> loadView('dashboard/create-login'));
Router::post('/login/create', fn()=> loadController('login-user'));

Router::get('/register/create', fn()=> loadView('dashboard/create-register'));
Router::post('/register/create', fn()=> loadController('register-user'));




Router::errorResponse(404, 'Not Found');
