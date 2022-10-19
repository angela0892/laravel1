<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Luis extends Controller
{
    function listar(){
        return view("luis");
    }
}
