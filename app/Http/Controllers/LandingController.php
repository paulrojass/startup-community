<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session, Auth;

class LandingController extends Controller
{
    /**
     * Show the home view.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //if (auth()->user()->hasRole(Role::all())) {
            return view('landings.index');
        //}
        //return redirect()->route('select-role');
    }

    /**
     * Show the investror view.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function investor()
    {
        //if (auth()->user()->hasRole(Role::all())) {
            return view('landings.investor');
        //}
        //return redirect()->route('select-role');
    }

    /**
     * Show the startup view.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function startup()
    {
        //if (auth()->user()->hasRole(Role::all())) {
            return view('landings.startup');
        //}
        //return redirect()->route('select-role');
    }

    /**
     * Show the professional view.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function professional()
    {
        //if (auth()->user()->hasRole(Role::all())) {
            return view('landings.professional');
        //}
        //return redirect()->route('select-role');
    }

    /**
     * Temporal logout.
     *
     * @return void
     */
    public function perform()
    {
        Session::flush();
        
        Auth::logout();

        return redirect('login');
    }


}
