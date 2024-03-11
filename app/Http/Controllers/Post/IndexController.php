<?php

namespace App\Http\Controllers\Post;

use App\Models\Category;
use App\Models\Post;


class IndexController extends BaseController
{
    public function __invoke()
    {
        $posts = Post::paginate(10);
        $categories = Category::all();
        return view('post.index', compact('posts','categories'));
    }
}
