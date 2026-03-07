<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\support\facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');
        $token = Auth::guard('api')->attempt($credentials);
        if (!$token) {
            return response()->json(['message' => 'Unauthorized access!'], 401);
        }
        return response()->json([
            'access_token' => $token,
            'expires_in' => Auth::guard('api')->factory()->getTTL() * 60
        ]);
    }
    public function refresh()
    {
        $refreshToken = Auth::guard('api')->refresh();
        return response()->json([
            'refresh_token' => $refreshToken,
            'expires_in' => Auth::guard('api')->factory()->getTTL() * 60
        ]);
    }
    public function me()
    {
        $user = Auth::guard('api')->user();
        return response()->json($user);
    }
    public function logout()
    {
        $user = Auth::guard('api')->logout();
        return response()->json(['message' => 'Successfully logged out']);
    }
}
