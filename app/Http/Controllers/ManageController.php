<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ManageController extends Controller
{
    public function product()
    {
        $products = Product::paginate(10);

        return view("ui.manage-product", [
            "products" => $products 
        ]);
    }
}
