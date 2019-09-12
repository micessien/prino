<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use Image;
use App\User;
class UserController extends Controller
{
    //
    public function profile(){
    	return view('profile', array('user' => Auth::user()) );
    }
    public function update_avatar(Request $request){


		$this->validate($request, [
			// "name" => "required",
			// "email" => "required|email"
		]);

		$user = Auth::user();

		$user = User::find($user->id);

		$user->name = $request->input('name');		
		$user->prenom = $request->input('prenom');	
		$user->genre = $request->input('genre');	
		$user->email = $request->input('email');	
		$user->entreprise = $request->input('entreprise');	
		$user->telephone = $request->input('telephone');	
			
		$user->save();

    	
    	return view('home', array('user' => Auth::user()) );
    }
}