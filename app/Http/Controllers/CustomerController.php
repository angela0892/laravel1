<?php

namespace App\Http\Controllers;
use App\Models\Customer;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    function listar () {
        $clientes = Customer::get();
        echo 'yyy';die;
        return dd($clientes);
    }
}
