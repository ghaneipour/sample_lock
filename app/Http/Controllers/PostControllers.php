<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
 

class PostControllers extends Controller{

    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function showProfile($id)
    {
        return view('user.profile', ['user' => User::findOrFail($id)]);
    }

 
	public function MyPostVoid()
	{
		return view('post.index');//'ok post 1';
	}
}

?>