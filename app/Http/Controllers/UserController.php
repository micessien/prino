<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use Image;
class UserController extends Controller
{
    //
    public function profile(){
    	return view('profile', array('user' => Auth::user()) );
    }
    public function update_avatar(Request $request){
    	// Handle the user upload of avatar
		$user = Auth::user();
		// $user->name = $request['name'];

		dump($request->all());

		// $user->save();
    	
    	return view('profile', array('user' => Auth::user()) );
    }
}