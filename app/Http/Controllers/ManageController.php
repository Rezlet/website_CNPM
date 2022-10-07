<?php

namespace App\Http\Controllers;

use App\Models\baseDB;
use App\Models\Category;
use App\Models\Order;
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


    public function deleteProduct(Request $request)
    {
        $data = [
            "deleted_at" => date("Y-m-d"),
        ];
        $this->baseDB->updateData("products", $data,$request->id);
        return back()->with("success", "Xóa thành công");
    }

    public function category()
    {
        $categories = Category::paginate(10);

        return view("ui.manage-category", [
            "categories" => $categories
        ]);
    }

    public function addCategory(Request $request)
    {
        $rules = ["name" => "required"];

        $data = ["name" => $request->name];

        $request->validate($rules);

        $this->baseDB->addData("categories", $data);
        return back()->with("success", "Cập nhập thành công");
    }

    public function deletedCategory(Request $request) {
       if( $this->baseDB->deleteOne("categories", $request->id)) {
           return back()->with("success", "Cập nhập thành công");
       }
       return back()->with("errors", "Cập nhập thất bại");
    }

    public function order(){
        $order = Order::paginate(10);

        return view("ui.manage-order", ["orders" => $order]);
    }

}
