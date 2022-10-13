<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function category(Request $request)
    {
        return view("ui.search", [
            "category" => $request->category
        ]);
    }
}
