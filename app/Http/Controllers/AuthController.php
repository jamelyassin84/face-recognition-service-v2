<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            abort(401, 'The provided credentials are incorrect.');
        }

        Auth::login($user);

        return JsonResource::make($user)
            ->additional([
                'token' => $user->createToken('auth-token')->plainTextToken,
            ]);
    }
}
