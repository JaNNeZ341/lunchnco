<?php
namespace App\Http\Controllers;
use Redirect;
use Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\Validates\Requests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Html\HtmlService\Provider;

class ProfileController extends BaseController{
    public function doLogout(){
        Auth::logout(); // logging out user
        return Redirect::to('login'); // redirection to login screen
    }
    public function doLogin(){
        // Creating Rules for Email and Password
        $rules = array(
        'email' => 'required|email', // make sure the email is an actual email
        'password' => 'required|alphaNum|min:8');
        // password has to be greater than 3 characters and can only be alphanumeric and);
        // checking all field
        $validator = Validator::make(Request::all() , $rules);
        // if the validator fails, redirect back to the form
        if ($validator->fails()){
            return Redirect::to('2_login.blade.php')->withErrors($validator) // send back all errors to the login form
            ->withInput(Request::except('password')); // send back the input (not the password) so that we can repopulate the form
        }else{
            // create our user data for the authentication
            $userdata = array(
            'email' => Request::get('email') ,
            'password' => Request::get('password')
            );
            // attempt to do the login
            if (Auth::attempt($userdata)){
                return view('3_home');
            // validation successful
            // do whatever you want on success
            }
            else{
                // validation not successful, send back to form
                return view('3_home');
            }
        }
    }
}