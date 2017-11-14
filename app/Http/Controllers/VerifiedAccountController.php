<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class VerifiedAccountController extends Controller
{
    public function verified($token,$email)
    {
    	 $user = User::where('email_token',$token)
    	 			->where('verified' ,0)
                    ->where('email',$email)
    	 			->first();
    	$user['email_token']= null;
    	$user['verified']= 1;
    	$user->save();
    	return redirect('/home');

    }
}
