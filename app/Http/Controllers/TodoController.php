<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TodoController extends Controller
{
    public function index()
    {
        $todos = DB::select('SELECT * FROM todo');
        // dd($todos);
        return view('home', ['todos' => $todos]);
        // or use compact['todos'] 
    }
}
