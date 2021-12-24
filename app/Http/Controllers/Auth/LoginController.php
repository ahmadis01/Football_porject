<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Symfony\Component\HttpFoundation\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash;
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


    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }
    

    public function login(Request $request){
        $validateData=$request->validate([
            'username'=> 'required',
            'password' => 'required'
        ]);
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
           
            return redirect()->intended('home');
        }
        else {
            return redirect()->route('login')->with('error','username or password is invalid');
        }
            
    }
    public function logout(){
        auth('web')->logout();
        return redirect()->route('welcome');
    }
}
