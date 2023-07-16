<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //
    public function home()
    {
        $product = DB::table('product')
            ->leftJoin('category', 'category.id', '=', 'id_category')
            ->select('product.*', 'category.name as name_category')
            ->take(3)
            ->get();
        return view('admin.phone_manager', compact('product'));
    }
}
