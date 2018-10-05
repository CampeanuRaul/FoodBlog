<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Category;

use App\Post;

use Session;

use Mail;

class PagesController extends Controller
{
    public function home() {
        $posts = Post::orderBy('id', 'desc')->limit(6)->get();

    	return view('pages/home')->withPosts($posts);
    }

    public function blog() {

    	$categories = Category::all();

    	return view('pages/blog')->withCategories($categories);
    }

    public function about() {
    	return view('pages/about');

    }

    public function postAbout(Request $request) {
        $this->validate($request, [
            'email' => 'required|email',
            'subject' => 'required|max:255',
            'message' => 'required|max:2000'
        ]);

        $data = [
            'subject' => $request->subject,
            'email' => $request->email,
            'bodyMessage' => $request->message
        ];

        Mail::send('emails.contact', $data, function($message) use($data) {
            $message->from($data['email']);
            $message->to('mosoiu888@gmail.com');
            $message->subject($data['subject']);
        });

        Session::flash('success', 'The form was sent!');

        return redirect()->route('home');
    }

    

    public function getSingle($id) {
        $post = Post::find($id);

        return view('pages.single')->withPost($post);
    }

    public function postNewsletter(Request $request) {

        $this->validate($request, [
            'email' => 'required|email'
        ]);

        $data = ['email' => $request->email];


        Mail::send('emails.send', $data, function ($message) use ($data){

            $message->from($data['email']);
            $message->to('mosoiu888@gmail.com', 'Campeanu Raul');
            $message->subject('Thank you');


        });
        Session::flash('success', 'Thank you for subscription!');    

        return redirect()->route('home');

       

    }

}
