<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'page_title' => 'Home',
            'posts' => Post::latestData(3),
            'categories' => Category::select('name', 'slug')->get()
        ];

        return view('front/home/index', $data);
    }
}
