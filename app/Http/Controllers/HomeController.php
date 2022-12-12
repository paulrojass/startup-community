<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //if (auth()->user()->hasRole(Role::all())) {
            return view('dashboard');
        //}
        //return redirect()->route('select-role');
    }

    /**
     * Show the role selection view.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function selectRole()
    {
        if (!auth()->user()->hasRole(Role::all())) {
            return view('select-role');
        }
        return redirect()->route('dashboard');
    }

}
