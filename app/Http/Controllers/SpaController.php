<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SpaController extends Controller
{
    public function index()
    {
        $products = DB::table('products')->get();

        return view('spa', ['products' => $products]);
    }
}
