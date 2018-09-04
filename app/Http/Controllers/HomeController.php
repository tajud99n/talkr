<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use App\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts_count = Post::all()->count();
        $trashed_count = Post::onlyTrashed()->get()->count();
        $users_count = User::all()->count();
        $categories_count = Category::all()->count();


        return view('admin.dashboard', compact(['posts_count', 'trashed_count', 'users_count', 'categories_count']));
    }
}
