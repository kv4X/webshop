<?php

namespace App\Http\Controllers\API;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

use App\User;
use App\Http\Resources\User as UserResource;
use App\Http\Resources\UserCollection;

use App\Http\Requests\API\AuthRegisterRequest;
use App\Http\Requests\API\AuthLoginRequest;
use App\Http\Requests\API\AuthUpdateRequest;
use App\Http\Requests\API\AuthChangePasswordRequest;

class AuthController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
       //$this->middleware('auth:api', ['except' => ['login']]);
    }

    /**
     * JWT Signup.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(AuthRegisterRequest $request)
    {   
        $requests = $request->all();
        $requests['password'] = Hash::make($requests['password']);
        $requests['password_confirmation'] = Hash::make($requests['password_confirmation']);

        $user = User::create($requests);
        return (new UserResource($user))->response()->setStatusCode(201);
    }
    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(AuthLoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if(!$token = Auth::guard('api')->attempt(['email' => $credentials['email'], 'password' => $credentials['password']]))
        {
            return response()->json([
                'success' => false,
                'message' => 'The email or password you entered is incorrect.',
            ], 401);
        }

        return $this->respondWithToken($token);
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        $user = auth()->user();
        return (new UserResource($user))->response()->setStatusCode(201);
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth()->logout();

        return response()->json([
            'success' => true,
            'message' => 'Successfully logged out',
        ], 401);        
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        return response()->json([
            'success' => true,
            'data' => [
                'access_token' => $token,
                'token_type' => 'bearer',
                'expires_in' => auth()->factory()->getTTL() * 60
            ]
        ]);
    }
}
