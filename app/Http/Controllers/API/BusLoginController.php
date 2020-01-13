<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\BusLoginRequest;

class BusLoginController extends Controller
{

    /**
     * Handles Login Request
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(BusLoginRequest $request)
    {
        $credentials = [
            'user_name' => $request->user_name,
            'password' => $request->password
        ];

        if (auth('bus')->attempt($credentials)) {

            $user = auth('bus')->user();

            // $user->token()->firstOrCreate(['token' => request('token')], [
            //     'token' => request('token'),
            //     'device' => request('device'),
            // ]);
               return response()->json([
                'driver_name' => $user->driver_name,
                'user_name' => $user->user_name,
                'phone' => $user->phone,
                'token' => $user->createToken('TutsForWeb')->accessToken,
                'students' => $user->students
            ],200);
        
        } else {
            return response()->json(['error' => 'UnAuthorised'], 401);
        }
    }

}
