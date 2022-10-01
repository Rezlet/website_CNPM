<?php

namespace App\View\Components;

use App\Models\Category;
use App\Models\Product;
use Illuminate\View\Component;

class FeaturedProduct extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name = "",$title = "")
    {
        $this->name = $name;
        if($name != "")
            $this->title = $name;
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        
        $products =Product::where("category_id",Category::where("name", $this->name)->first()->id)->limit(10)->get();
        return view('components.featured-product', [
            "products" => $products,
            "title" => $this->title
        ]);
    }
}
