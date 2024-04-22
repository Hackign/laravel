<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeControllers extends Controller
{

    public function __invoke()
    {
        return "¡Bienvenido al curso de Laravel!";
    }

}