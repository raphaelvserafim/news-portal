<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function allPosts()
    {
        return view('admin.pages.posts');
    }

    public function users()
    {
        return view('admin.pages.users');
    }


    public function addPosts()
    {
        return view('admin.pages.addposts');
    }

    public function category()
    {
        return view('admin.pages.category');
    }
}
