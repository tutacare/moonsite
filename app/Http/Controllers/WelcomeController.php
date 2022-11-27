<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Web\Post;

class WelcomeController extends Controller
{
    public function __invoke()
    {
        $posts = Post::all();
        return view('welcome', compact('posts'));

    }
}
