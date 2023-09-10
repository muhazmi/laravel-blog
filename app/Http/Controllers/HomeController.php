<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'page_title' => 'Home',
            'posts' => Post::latest()->limit(9)->get()
        ];
        return view('front/home/index', $data);
    }
}
