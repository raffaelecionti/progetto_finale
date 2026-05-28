<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

//use Illuminate\Http\Request;

class ArticleController extends Controller implements HasMiddleware
{

public static function middleware()
{
    return [
        new Middleware('auth', only: ['create']),
    ];
}

    public function create()
    {
        return view('article.create');
    }
}
