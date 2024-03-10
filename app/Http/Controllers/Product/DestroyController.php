<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Products;


class DestroyController extends BaseController
{
    public function __invoke(Products $product)
    {
        $product->delete();
        return redirect()->route('product.index');
    }
}
