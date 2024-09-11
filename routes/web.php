<?php

declare(strict_types=1);

use App\Router;
use Controllers\AdController;

Router::get('/', fn() => (new AdController())->home());

Router::get('/ads/{id}', fn(int $id) => (new AdController())->show($id));
Router::get('/ads/create', fn() => loadView('dashboard/create-ad'));
Router::post('/ads/create', fn() => (new AdController())->create());

Router::get('/ads/update/{id}', fn(int $id) => (new AdController())->update($id));

// Statuses
Router::get('/status/create', fn() => loadView('dashboard/create-status'));
Router::post('/status/create', fn() => loadController('createStatus'));

Router::get('/login',  fn() => loadView('auth/login'), 'guest');
Router::post('/login', fn() => (new \Controllers\BranchController())->login());

Router::get('/admin', fn() => loadView('dashboard/home'), 'auth');
Router::get('/profile', fn() => (new \Controllers\UserController())->loadProfile(), 'auth');

Router::delete('/ads/delete/{id}', fn(int $id)=>(new AdController())->delete($id));

Router::get('/admin/branches', fn() => loadView('dashboard/branches'), 'auth');
Router::get('/admin/ads', fn() => loadView('dashboard/ads'), 'auth');

Router::get('/search', fn() => (new AdController())->search());

Router::errorResponse(404, 'Not Found');

/**
 * Delete ad:
 * Requirements: ad_id
 *
 * Delete:
 * 1. From ads_image table
 * 2.
 */