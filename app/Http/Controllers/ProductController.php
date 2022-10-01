<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        return "hello";
    }

    public function productDetails(Request $request) {
        dd($request->name);
    }
}
