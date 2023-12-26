<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use Faker\Provider\Lorem;
use GuzzleHttp\Promise\Create;

class PostController extends Controller
{
    public function index()
    {
        // $posts = Post::latest();
        // $category = [];
        // foreach ($posts->get() as $key) {
        //     $category[] = $key->category;
        // }
        return view('posts', [
            "title" => "All Post",
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(8)
                ->withQueryString(),
            "category" => Category::all()
            // "posts" => Post::all()
        ]);
    }

    public function detail(Post $post)
    {
        return view('detail', [
            "title" => "detail post",
            "post" =>  $post
        ]);
    }
}
