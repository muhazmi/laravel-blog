<?php

namespace App\Http\Controllers;

use App\Models\Post;
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
            'posts' => Post::paginate(9)
        ];
        
        return view('front/post/index', $data);
    }

}
