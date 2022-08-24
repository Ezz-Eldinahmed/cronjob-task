<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Models\Admin;
use App\Http\Requests\StoreAdminRequest;
use App\Http\Resources\ApiResource;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules;

class AdminController extends Controller
{

    public function store(StoreAdminRequest $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:admins'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = Admin::create($request->validated());

        return [
            'user' => new ApiResource($user),
            'access_token' => $user->createToken('authToken')->accessToken
        ];
    }

    public function login(LoginRequest $request)
    {
        if (!auth()->attempt($request->validated())) {
            return response()->json([
                'message' => 'Invalid Credentials',
            ], 422);
        }

        return [
            'user' => new ApiResource(auth()->user()),
            'access_token' => auth()->user()->createToken('authToken')->accessToken
        ];
    }

    public function logout()
    {
        if (Auth::check()) {
            Auth::user()->AauthAcessToken()->delete();
            return response('Logged Out Succssefully', 200);
        }
    }
}
