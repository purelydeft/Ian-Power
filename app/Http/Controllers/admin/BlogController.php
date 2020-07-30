<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    //

    public function index()
    {
        # code...
    }
    public function create()
    {
        return view('admin.Blogs.create');
    }
}
