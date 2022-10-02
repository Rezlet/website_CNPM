<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        return "hello";
    }

    public function productDetails(Request $request) {
        $product = Product::where("title", $request->title)->first();
        dd($product);
    }
}
