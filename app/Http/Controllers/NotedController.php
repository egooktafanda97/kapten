<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotedController extends Controller
{
    public function index()
    {
        return view("noted.index");
    }
    public function blog()
    {
        return view("blog.index");
    }
}
