<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(){
        $product = DB::table('product')->take(3)->get();
        return view('index',compact('product'));
    }
}
