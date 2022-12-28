<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Subscribe;
use App\Models\Subscriber;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class SubscriberController extends Controller
{
    public function subscribe(Request $request) 
    {
        $validator = Validator::make($request->all(),
            [
                'name' => 'required',
                'email' => 'required|email|unique:subscribers',
            ]
        );
    
        if ($validator->fails()) {
            return new JsonResponse(['success' => false, 'message' => $validator->errors()], 422);
        }  
    
        $email = $request->all()['email'];
        $name = $request->all()['name'];
        $message = $request->all()['message'];
        $role = $request->all()['role'];
        $subscriber = Subscriber::create(
            [
            'email' => $email,
            'name' => $name,
            'message' => $message,
            'role' => $role
            ]
        ); 

        if ($subscriber) {
            Mail::to($email)->send(new Subscribe($email));
            return new JsonResponse(
                [
                    'success' => true, 
                    'message' => "Gracias por suscribirse, por favor revise su bandeja de entrada"
                ], 
                200
            );
        }
    }
}
