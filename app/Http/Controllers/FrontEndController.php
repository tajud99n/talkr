<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Category;
use App\Post;
use App\Setting;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index()
    {
        $site_details = Setting::first();
        $categories = Category::take(5)->get();
        $posts = Post::orderBy('created_at', 'desc')->take(3)->get();

        return view('welcome', compact(['site_details', 'categories', 'posts']));
    }

    public function show ($slug)
    {
        $site_details = Setting::first();
        $tags = Tag::all();
        $categories = Category::take(5)->get();

        $post = Post::where('slug', $slug)->first();

        $next_id = Post::where('id', '>', $post->id)->min('id');
        $next = Post::find($next_id);

        $prev_id = Post::where('id', '<', $post->id)->max('id');
        $prev = Post::find($prev_id);

        return view('single', compact(['site_details', 'categories', 'post', 'next', 'prev', 'tags']));
    }

    public function category($slug)
    {
        $site_details = Setting::first();
        $categories = Category::take(5)->get();

        $category = Category::where('slug', $slug)->first();

        return view('category', compact('category', 'site_details', 'categories'));
    }

    public function tag($slug)
    {
        $site_details = Setting::first();
        $categories = Category::take(5)->get();

        $tag = Tag::where('slug', $slug)->first();

        return view('tag', compact('tag', 'site_details', 'categories'));
    }
}
