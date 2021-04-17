<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use App\Models\User;


class LoginUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
          
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('auth.login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials, $request->filled('remember'))) {
            $request ->session()->regenerate();
              
            Auth::login($credentials);
            return redirect('/');


            }   
             return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
                        ]);
        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }





    public function destroy(Request $request)
    {
       Auth::logout();
      
       $request->session()->invalidate();

       $request->session()->regenerateToken();

       return redirect('auth.login');

    
    }
}