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
            'posts' => Post::latesData(3)
        ];
        return view('front/home/index', $data);
    }
}
