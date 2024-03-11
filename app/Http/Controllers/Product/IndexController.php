<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Products;


class IndexController extends BaseController
{
    public function __invoke()
    {
        $products = Products::paginate(10);
        return view('product.index', compact('products'));
    }
}
