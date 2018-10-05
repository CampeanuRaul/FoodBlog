<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Category;

use App\Post;

class CategoryController extends Controller
{
	public function getAll() {
		$categories = Category::all();
		$posts = Post::paginate(6);

		return view('categories.all')->withPosts($posts)->withCategories($categories);
	}

    public function show($id) {

    	$categories = Category::all();

    	$posts = Post::where('category_id', '=', $id)->paginate(6);

    	return view('categories.show')->withPosts($posts)->withCategories($categories); 
    }
}
