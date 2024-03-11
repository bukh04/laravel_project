<?php

namespace App\Http\Controllers\Product;
use App\Filters\ProductFilter;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Products;


class IndexController extends BaseController
{
    public function __invoke(ProductFilter $filter)
    {
        $products = Products::filter($filter)->paginate(10);
        $categories = Category::all();
        return view('product.index', compact('products','categories'));
    }
}
