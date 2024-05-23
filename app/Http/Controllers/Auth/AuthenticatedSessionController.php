<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Validation\ValidatesRequests;

class AuthenticatedSessionController extends Controller
{
    use ValidatesRequests;
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(route('dashboard', absolute: false));
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
    public function customLogin(Request $request){

        $input = $request->all();
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // check if the given user exists in db
        if(Auth::attempt(['email'=> $input['email'], 'password'=> $input['password']])){
            // check the user role
            if(Auth::user()->type == 'client'){
                return redirect()->route('dashboard');
            }
            elseif (Auth::user()->type == 'admin') {
                return redirect()->route('adminDashboard');
            }
            elseif (Auth::user()->type =='talent') {
                return redirect()->route('talentDashboard');
            }
        }
        else{
            return redirect()->route('login')->with('error', "Wrong credentials");
        }

    }
}
