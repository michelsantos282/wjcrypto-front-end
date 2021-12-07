<?php

use Pecee\SimpleRouter\SimpleRouter;

SimpleRouter::get('/', [\App\Controllers\UserController::class, 'index']);
SimpleRouter::get('/login', [\App\Controllers\UserController::class, 'login']);
SimpleRouter::get('/cadastro', [\App\Controllers\UserController::class, 'create']);
