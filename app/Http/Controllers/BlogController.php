<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Products;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $blog = Blog::where('likes', 5)->first();
        dump($blog);
        dd('end');
    }

    public function firstOrCreate()
    {
        $newBlog=[
            'title'=>'weather',
            'date'=>'2024-01-24',
            'writer'=>'Alex',
            'image'=>'image of laptop',
            'content'=>'good  article',
            'comments'=>'yessss',
            'likes'=>4,
        ];

        $blog = Blog::firstOrCreate([
            'title'=>'weather'
        ], $newBlog);
        dump($blog->content);
    }
    public function updateOrCreate()
    {
        $newBlog=[
            'title'=>'weather in Denmark',
            'date'=>'2024-01-24',
            'writer'=>'Silas',
            'image'=>'image of weather',
            'content'=>'good  article',
            'comments'=>'yessss',
            'likes'=>4,
        ];
        $blog = Blog::updateOrCreate([
            'title'=>'weather in Denmark',
        ],$newBlog);
    }
}
