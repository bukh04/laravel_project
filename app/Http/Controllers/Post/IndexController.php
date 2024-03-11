<?php

namespace App\Http\Controllers\Post;

use App\Filters\PostFilter;
use App\Models\Category;
use App\Models\Post;


class IndexController extends BaseController
{
    public function __invoke(PostFilter $filter)
    {
        $posts = Post::filter($filter)->paginate(10);
        $categories = Category::all();
        return view('post.index', compact('posts','categories'));
    }
}
