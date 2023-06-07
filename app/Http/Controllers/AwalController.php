<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
//return type View
use Illuminate\View\View;
use App\Models\Post;
//return type redirectResponse
use Illuminate\Http\RedirectResponse;

class AwalController extends Controller
{
    public function index()
    {
        $agenda = Post::count();
        return view('home')->with('agenda', $agenda);
    }
}
