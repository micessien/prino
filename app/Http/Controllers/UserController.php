<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\UserCreateRequest;
use App\Mail\AccountActivatedMail;
use App\VerifyUser;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Mail;
use Ramsey\Uuid\Uuid;
use App\Rules\Captcha;

class UserController extends Controller
{

    public function profile()
    {
    	return view('profile', array('user' => Auth::user()) );
    }

    public function update_avatar(Request $request)
    {

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

    public function store(UserCreateRequest $request)
    {
        $user = User::create([
            'genre' => $request->get('genre'),
            'name' => $request->get('name'),
            'prenom' => $request->get('prenom'),
            'email' => $request->get('email'),
            'telephone' => $request->get('telephone'),
            'entreprise' => $request->get('entreprise'),
            'password' => bcrypt($request->get('password')),
            'type' => $request->get('type')
        ]);

        $this->sendAccountActivatedMail($user);

        return redirect()->to('confirmation');
    }

    public function accountActivated(Request $request)
    {
        $verified = VerifyUser::where('token', $request->get('token'))->first();
        if ($verified == null) {
            return "Invalid token";
        }
        User::find($verified->user_id)->update([
            'verified' => true,
            'verified_at' => Carbon::now(),
        ]);
        $verified->delete();
        return redirect()->to('felicitation');
    }

    private function sendAccountActivatedMail($user)
    {
        $verified = $user->verifyUser()->save(new VerifyUser([
            'token' => Uuid::uuid4()->toString()
        ]));
        Mail::to($user)
            ->send(new AccountActivatedMail($user, $verified));
    }

}