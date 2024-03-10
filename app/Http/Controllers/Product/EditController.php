<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Products;
use App\Models\Tag;


class EditController extends BaseController
{
    public function __invoke(Products $product)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('product.edit', compact('product','categories', 'tags'));
    }
}
