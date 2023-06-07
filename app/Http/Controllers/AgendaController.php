<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class AgendaController extends Controller
{
    public function index()
    {
        $kegiatans = Post::all();
        return view('agenda', ['kegiatans' => $kegiatans]);
    }
}
