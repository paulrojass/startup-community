<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Startup;

class DirectoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //dd($request->all());
        if ($request->search) {
            $startups = Startup::search($request->search)->paginate(10);
            //$startups = Startup::paginate(10);

        } else {
            //$startups = Startup::all();
            $startups = Startup::paginate(10);
        }


        return view('startups.index');

        //return response()->json($startups);
        //return $this->sendResponse(StartupResource::collection($startups), 'Startups retrieved successfully.');
    }
}
