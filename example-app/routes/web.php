<?php
use App\Models\Ad;
use App\Actions\Getads;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdController;

Route::get('/', \App\Actions\Getads::class);
Route::get('/ads/{id}' ,[AdController::class,'show']);
Route::resource('ads', \App\Http\Controllers\AdController::class);
Route::get('/search',[\App\Http\Controllers\AdController::class ,'find']);


