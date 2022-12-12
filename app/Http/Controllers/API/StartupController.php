<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Requests\StoreStartupRequest;
use App\Http\Requests\UpdateStartupRequest;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Startup;
use App\Models\User;
use Validator;
use App\Http\Resources\StartupResource;
use Illuminate\Support\Str;

class StartupController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $startups = Startup::all();

        return $this->sendResponse(StartupResource::collection($startups), 'Startups retrieved successfully.');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStartupRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStartupRequest $request)
    {
        $user = User::first();

        $request->request->add(['user_id' => $user->id]);

        $input = $request->all();

        $logo = null;
        if ($request->has('logo')) {
            $logo = $this->saveLogo($request);
        }

        $startup = Startup::create($input);

        if ($logo) {
            $startup->logo = $logo;
        }
        
        $startup->save();
        return back();

        //return $this->sendResponse(new StartupResource($startup), 'Startup created successfully.');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $startup = Startup::find($id);

        if (is_null($startup)) {
            return $this->sendError('Startup not found.');
        }

        return $this->sendResponse(new StartupResource($startup), 'Startup retrieved successfully.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Startup $startup)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'name' => 'required',
            'detail' => 'required'
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $startup->name = $input['name'];
        $startup->detail = $input['detail'];
        $startup->save();

        return $this->sendResponse(new StartupResource($startup), 'Startup updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Startup $startup)
    {
        $startup->delete();

        return $this->sendResponse([], 'Startup deleted successfully.');
    }

    public function saveLogo(Request $request)
    {
        $request->validate(
            [
                'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ]
        );

        $imageName = time().'.'.$request->logo->extension();

        $fullName = 'storage/images/logos/'.$imageName;

        $request->logo->move('storage/images/logos', $imageName);

        // $originalImage = $request->file('logo');
        // //$image = Image::make($originalImage);
        // //$image->orientate();
        // $originalPath = public_path() . '/storage/images/logos/';
        // //Nombre aleatorio para la image
        // $tempName = Str::random(20) . '.' . $originalImage->getClientOriginalExtension();
        //Redimensinoar la imagen
        // if ($image->width() >= $image->height()) {
        //     $image->heighten(400);
        // } else {
        //     $image->widen(400);
        // }

        // $image->resizeCanvas(400, 400);

        //$image->save($originalPath . $tempName);

        //$originalImage->move($originalPath . $tempName);

        return $fullName;
    }


}