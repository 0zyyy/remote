<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            "title" => "Halaman Posts",
            "posts" => Post::all()
        ]);
    }
    public function showSingle(Post $post)
    {
        return view('post', [
            'title' => 'Halaman Post',
            'post' => $post
        ]);
    }

    public function showCategory(Category $category)
    {
        return view('category', [
            'title' => $category->name,
            'posts' => $category->posts,
            'category' => $category->name
        ]);
    }

    public function showCategories()
    {
        return view('categories', [
            'title' => 'Halaman Categories',
            'categories' => Category::all()
        ]);
    }
}
