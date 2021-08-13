<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
 

class UserControllers extends Controller{

    public function show($id){
        #return view('user.profile', ['user' => User::findOrFail($id)]);
        return 'ok user'.$id.'    '.$n1;
    }
 
    public function MyUserVoid()
    {
        return 'ok user 2';
    }
}




?>