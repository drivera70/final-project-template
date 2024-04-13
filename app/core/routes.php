<?php

use app\controllers\UserController;
use app\controllers\JobController;

$routes = [
    'users' => [
        'controller' => UserController::class,
        'GET' => 'getUsers',
        'POST' => 'saveUsers'
    ],
    'view-users' => [
        'controller' => UserController::class,
        'GET' => 'getUsers',
    ],
    'experience' => [
        'controller' => JobController::class,
        'GET' => 'getJobs',
        'POST' => 'saveJobs'
    ],
    'experience-view' => [
        'controller' => JobController::class,
        'GET' => 'viewJobs'
    ]
];