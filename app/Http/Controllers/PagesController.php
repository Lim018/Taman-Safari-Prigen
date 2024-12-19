<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal;
use App\Models\Post;

class PagesController extends Controller
{
    public function index()
    {
        $jadwals = Jadwal::all();
        return view('pages.index', compact('jadwals'));
    }
    public function about()
    {
        return view('pages.about');
    }
    public function jadwal()
    {
        $jadwals = Jadwal::all();
        return view('pages.jadwal', compact('jadwals'));
    }
    public function posts()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }
}
