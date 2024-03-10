<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Products;


class ShowController extends BaseController
{
    public function __invoke(Products $product)
    {
        return view('product.show', compact('product'));
    }
}
