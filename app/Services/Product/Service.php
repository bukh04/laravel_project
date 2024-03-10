<?php

namespace App\Services\Product;

use App\Models\Products;

class Service
{
    public function store($data)
    {
        $tags = $data['tags'];
        unset($data['tags']);
        $product=Products::create($data);
        //tags() - its method from model posttag, parentheses mean database query
        //https://laravel.com/docs/10.x/eloquent-relationships#attaching-detaching
        $product->tags()->attach($tags);
    }
    public function update($product, $data)
    {
        $tags = $data['tags'];
        unset($data['tags']);

        $product->update($data);
        $product->tags()->sync($tags);
    }
}
