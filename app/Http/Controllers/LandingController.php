<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

}
