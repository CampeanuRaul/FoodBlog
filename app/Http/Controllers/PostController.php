<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Category;

use App\Post;

use Storage;

use Session;

use Image;

use Auth;

use App\User;

class PostController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $posts = Post::where('user_id', '=', $user->id)->get();

        return view('posts.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('posts.create')->withCategories($categories);
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
            'title' => 'required|min:5|max:255',
            'image' => 'required|image',
            'body' => 'required|min:10|max:2000'
        ]);

        $post = new Post;
        $user = Auth::user();

        $post->title = $request->title;
        $post->body = $request->body;
        $post->category_id = $request->category_id;
        $post->user_id = $user->id;

        $image = $request->file('image');
        $fileName = time(). '.' . $image->getClientOriginalExtension();
        $location = public_path('images/' . $fileName);
        Image::make($image)->save($location);

        $post->image = $fileName;

        $post->save();

        Session::flash('success', 'The post was successfully saved!');

        return redirect()->route('home');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);

        return view('posts.show')->withPost($post);
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

        return view('posts.edit')->withPost($post);
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
        $this->validate($request, [
            'title' => 'required|min:10|max:255',
            'image' => 'required|image',
            'body' => 'required|min:10|max:2000'
        ]);

        $post = Post::find($id);

        $post->title = $request->title;
        $post->body = $request->body;
        $image = $request->file('image');
        $fileName = time(). '.' . $image->getClientOriginalExtension();
        $location = public_path('images/' . $fileName);
        Image::make($image)->save($location);
        $oldName = $post->image;
        $post->image = $fileName;

        Storage::delete($oldName);

        $post->save();

        return redirect()->route('posts.show', $post->id);

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

        Storage::delete($post->image);

        $post->delete();
        Session::flash('success', 'You successfully deleted your post!');

        return redirect()->route('posts.index');
    }
}
