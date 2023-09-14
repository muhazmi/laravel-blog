<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'page_title' => 'All Posts',
            'posts' => Post::paginate(9),
            'categories' => Category::select('name', 'slug')->get()
        ];
        
        return view('front/post/index', $data);
    }

}
