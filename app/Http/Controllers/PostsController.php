<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $testi = new Post();
        $sender = Auth::user()->ID_USER;
        $message = $request->input('MESSAGE_TEXT');
        $create_by = Auth::user()->NAMA_USER;
        $testi->save();
        
        return redirect()->route('posts.index')->with('success', 'Pesan berhasil dikirim!');
    }
}