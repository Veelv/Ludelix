<?php

namespace App\Controllers;

use Ludelix\Bridge\Bridge;
use Ludelix\Core\Controller;

class WelcomeController extends Controller
{
public function index()
    {
        $translaton = Bridge::trans();
        $data = [
            "title" => $translaton->t('messages.welcome'),
        ];
        return Bridge::ludou()->render('welcome', $data);
    }
}