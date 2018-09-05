<?php

namespace App\Http\Controllers;

use Auth;
use File;
use Session;
use App\Post;
use App\Category;
use App\Tag;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.posts.index')->with('posts', Post::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();

        if ($categories->count() == 0 || $tags->count() == 0)
        {
            Session::flash('info', 'You must have some categories and/or tags before attempting to create a post.');

            return redirect()->back();
        }

        return view('admin.posts.create', compact(['categories','tags']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'         => 'required',
            'featured'      => 'required|image|max:1999',
            'content'       => 'required',
            'category_id'   => 'required',
            'tags'          => 'required'
        ]);

        $featured = $request->featured;

        $featured_new_name = time().$featured->getClientOriginalName();

        $featured->move('uploads' . DIRECTORY_SEPARATOR . 'posts', $featured_new_name);

        $post = Post::create([
            'title'         => $request->title,
            'content'       => $request->content,
            'featured'      => DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR . 'posts' . DIRECTORY_SEPARATOR . $featured_new_name,
            'category_id'   => $request->category_id,
            'slug'          => str_slug($request->title),
            'user_id'       => Auth::id()
        ]);

        $post->tags()->attach($request->tags);

        Session::flash('success', 'Post created successfully.');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);

        $categories = Category::all();

        $tags = Tag::all();

        return view('admin.posts.edit', compact(['post', 'categories', 'tags']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);

        $this->validate($request, [
            'title'         => 'required',
            'content'       => 'required',
            'category_id'   => 'required'
        ]);

        if ($request->hasFile('featured'))
        {
            $this->validate($request, [
                'featured'         => 'max:1999'
            ]);

            $featured = $request->featured;

            $featured_new_name = time() . $featured->getClientOriginalName();

            $featured->move('uploads/posts', $featured_new_name);

            $post->featured = DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR . 'posts' . DIRECTORY_SEPARATOR . $featured_new_name;
        }

        $post->title        = $request->title;
        $post->slug         = str_slug($request->title);
        $post->content      = $request->content;
        $post->category_id  = $request->category_id;

        $post->save();

        $post->tags()->sync($request->tags);

        Session::flash('success', 'Post updated successfully');

        return redirect()->route('posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);

        $post->delete();

        Session::flash('success', 'Post successfully trashed.');

        return redirect()->back();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function trashed()
    {
        $posts = Post::onlyTrashed()->get();

        return view('admin.posts.trashed')->with('posts', $posts);
    }

    /**
     * Permanently delete the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function kill($id)
    {
        $post = Post::withTrashed()->where('id', $id)->first();

        File::delete(public_path() . DIRECTORY_SEPARATOR . $post->getAttributes()['featured']);

        $post->forceDelete();

        Session::flash('success', 'Post successfully deleted permanently.');

        return redirect()->back();
    }

    public function restore($id)
    {
        $post = Post::withTrashed()->where('id', $id)->first();

        $post->restore();

        Session::flash('success', 'Post restored successfully.');

        return redirect()->route('posts');
    }
}
