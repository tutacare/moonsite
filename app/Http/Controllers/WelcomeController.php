<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Web\Post;

class WelcomeController extends Controller
{
    public function __invoke()
    {
        $posts = Post::take(4)->orderBy('created_at', 'DESC')->get();
        return view('welcome', compact('posts'));

    }

    public function berita()
    {
        $posts = Post::all();
        return view('welcome.berita.index', compact('posts'));
    }

    public function beritaDetail($slug)
    {
        $berita = Post::where('slug', $slug)->first();
        return view('welcome.berita.show', compact('berita'));
    }
}
