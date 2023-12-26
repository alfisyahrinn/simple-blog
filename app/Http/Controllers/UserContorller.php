<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserContorller extends Controller
{
    public function index()
    {
        return view('author', [
            'title' => 'Post Author',
            'author' => User::all(),
        ]);
    }
    public function detail(User $author)
    {
        return view('posts', [
            'title' => 'By Author ' . $author->name,
            'posts' => $author->posts->load('category', 'user'),
            'author' => $author->name,
            'image' => $author->image
        ]);
    }
}
