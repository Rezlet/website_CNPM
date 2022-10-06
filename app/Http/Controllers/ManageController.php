<?php

namespace App\Http\Controllers;

use App\Models\baseDB;
use App\Models\Product;
use Illuminate\Http\Request;

class ManageController extends Controller
{
    public function __construct()
    {
        $this->baseDB = new baseDB;
    }
    public function product()
    {
        $products = Product::whereNull("deleted_at")->paginate(10);

        return view("ui.manage-product", [
            "products" => $products 
        ]);
    }


    public function deleteProduct(Request $request) {
        $this->baseDB->deleteOne("products", $request->id);
        return back()->with("success", "Xóa thành công");
    }
}
