<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

use Image;

use Auth;

use Session;

use Storage;

use Hash;

class UserController extends Controller
{
    public function __construct() {
        return $this->middleware('auth');
    }

    public function postPassword(Request $request) {
        $user = Auth::user();

        $this->validate($request, [
            'old_pass' => 'required|max:255|min:6',
            'new_pass' => 'required|max:255|min:6'
        ]);


        if(Hash::check($request->old_pass, $user->password)) {
            $user->password = bcrypt($request->new_pass);
            $user->save();

            Session::flash('success', 'The password has changed!');
            
        } else {
            Session::flash('failed', 'The old password is incorrect');
        }


        return redirect()->route('users.index');



    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        return view('users.index');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);

        return view('users.edit', [$user->id])->withUser($user);
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
            'name' => 'required|max:255',
            'email' => 'required|email',
            'image' => 'required|image'
        ]);

        $user = User::find($id);

        $user->name = $request->name;
        $user->email = $request->email;

        $image = $request->file('image');
        $fileName = time(). '.' . $image->getClientOriginalExtension();
        $location = public_path('images/' . $fileName);
        Image::make($image)->save($location);
        $oldImage = $user->image;
        $user->image = $fileName;

        Storage::delete($oldImage);
        $user->save();

        Session::flash('success', 'The profile was successfully updated!');

        return redirect()->route('users.index');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);

        $image = $user->image;

        if($image !== 'default.jpg') {
            Storage::delete($image);
        }

        $user->delete();
        
        Session::flash('success', 'The account was deleted!');

        return redirect()->route('home');
    }

    public function del($id) {

        $user = User::find($id);


        return view('users.delete', [$user->id])->withUser($user);

    }


    
}
