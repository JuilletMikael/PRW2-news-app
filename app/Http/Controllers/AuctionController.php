<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Auction;
use Illuminate\Http\Request;

class AuctionController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create(Article $article)
    {
        return view('auctions.create', ['article' => $article]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Article $article)
    {
        //
    }
}
