<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class OficinaController extends Controller
{
    function listar() { 
		$oficinas = DB::table("offices")->get();
        return view('oficinas', compact("oficinas"));
  }
}
