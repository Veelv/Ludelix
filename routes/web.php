<?php

use App\Controllers\WelcomeController;
use Ludelix\Bridge\Bridge;

Bridge::route()->get('/', [WelcomeController::class, 'index']);