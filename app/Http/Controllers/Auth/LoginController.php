<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */


     protected function authenticated(Request $request){

        if(Auth::user()->roles==="Customer"){
            return redirect()->route('product.index');
        }

        else if(Auth::user()->roles==="Admin"){
                
            return redirect()->route('home_page');

        }else if(Auth::user()->roles==="Farmer"){
                 
            return redirect()->route('home_page');
        }   
    }
     // protected $redirectTo='/';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
