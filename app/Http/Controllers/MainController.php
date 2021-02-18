<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use validator;
use Auth;

class MainController extends Controller
{
    function index()
    {
        return view('q3/flag_3');
    }

    function checklogin(Request $request)
    {
        $this ->validate($request, ['email' => 'required|email','password' => 'required|min:8|max:10']);

        $user_data = array('email'  => $request->get('email'),'password' => $request->get('password'));

        if(Auth::attempt($user_data))
        {
            return redirect('q3/success');
        }
        else
        {
            return back()->with('error', 'Try again mighty wizard');
        }

    }

    function successlogin()
    {
     return view('q3/success');
    }

    function logout()
    {
     Auth::logout();
     Session::flush();
     return redirect('/quest');
    }

}
