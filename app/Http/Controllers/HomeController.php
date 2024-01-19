<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('home', ['articles' => Article::orderby('views_counter', 'desc')->limit(5)->get()]);
    }
}
