<?php
namespace App\Http\Controllers\API;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

use App\User;
use App\Http\Resources\User as UserResource;

use App\Http\Requests\API\AuthUpdateRequest;
use App\Http\Requests\API\AuthChangePasswordRequest;

class ProfileController extends Controller
{
    /**
     * Update a user information.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(AuthUpdateRequest $request)
    {
        $requests = $request->except('email', 'password');
        $user = Auth::guard()->user();
        $user->update($requests);
    }

    /**
     * Change a user password.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function changePassword(AuthChangePasswordRequest $request)
    {
        $requests = $request->only('old_password', 'password', 'password_confirmation');
        $user = auth()->user();
        
        if(Hash::check($requests['old_password'], $user->password)) {
            $requests['password'] = Hash::make($requests['password']);
            $user = Auth::guard()->user();
            $user->update($requests);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Current password is incorrect.',
            ], 200);
        }
    }

    /**
     * Reset a user password.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    

}
