<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\ParentLoginRequest;

class ParentLoginController extends Controller
{

    /**
     * Handles Login Request
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(ParentLoginRequest $request)
    {
        $credentials = [
            'user_name' => $request->user_name,
            'password' => $request->password
        ];

        if (auth('parent')->attempt($credentials)) {

            $user = auth('parent')->user();

            // $user->token()->firstOrCreate(['token' => request('token')], [
            //     'token' => request('token'),
            //     'device' => request('device'),
            // ]);
               return response()->json([
                'first_name' => $user->first_name,
                'last_name' => $user->last_name,
                'mobile_number1' => $user->mobile_number1,
                'mobile_number2' => $user->mobile_number2,
                'address' => $user->address,
                'token' => $user->createToken('TutsForWeb')->accessToken,
                'children' => $user->students
            ],200);
        
        } else {
            return response()->json(['error' => 'UnAuthorised'], 401);
        }
    }

}
