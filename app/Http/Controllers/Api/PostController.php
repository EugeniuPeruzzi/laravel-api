<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Importo il model di Post

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('category', 'technologies'  )->get();

        return response()->json([
            'success' => true,
            'results' => $posts
        ]);
    }
}
