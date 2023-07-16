<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class PhoneManagerController extends Controller
{
    //
    public function list()
    {
        $product = DB::table('product')
            ->leftJoin('category', 'category.id', '=', 'id_category')
            ->select('product.*', 'category.name as name_category')
            ->take(3)
            ->get();
        return view('admin.phone_manager', compact('product'));
    }
    public function add(ProductRequest $request)
    {
        if ($request->isMethod('POST')) {
            $product = Product::create($request->except('_token'));
            if ($product->id) {
                Session::flash('success', 'Success!');
                return redirect()->route('route_product_add');
            }
        }
        $category = DB::table('category')->get();
        return view('admin.add_phone',compact('category'));
    }
}
