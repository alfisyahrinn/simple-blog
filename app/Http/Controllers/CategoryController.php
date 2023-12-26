<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('categories', [
            'title' => 'Post Categories',
            'category' => Category::all(),
        ]);
    }

    public function detail(Category $category)
    {
        return view('posts', [
            'title' => "By Catagory " . $category->name,
            'posts' => $category->posts->load('category', 'user'),
            'category' => $category->name,
        ]);
    }
}
