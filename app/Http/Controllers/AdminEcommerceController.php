<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminEcommerceController extends Controller
{
    static function index()
    {
        return view('admin.ecommerce');
    }
}
