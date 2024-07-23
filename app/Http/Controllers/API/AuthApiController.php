<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use function Laravel\Prompts\error;

class AuthApiController extends Controller
{
    public function register(Request $request)
    {
        try {
            $request->validate([
                'name' => ['required', 'string', 'max:100'],
                'email' => ['required', 'string', 'email', 'max:50', 'unique:users'],
                'password' => ['required', 'min:6']
            ]);

            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            $user = User::where('email', $request->email)->first();
            $tokenResult = $user->createToken('authToken')->plainTextToken;

            $data = [
                'access_token' => $tokenResult,
                'token_type' => 'Bearer',
                'user' => $user
            ];

            return response()->json([
                'status' => true,
                'data' => $data,
                'message' => 'Create token success!'
            ]);

        } catch (Exception $error) {
            return response()->json([
                'status' => false,
                'data' => null,
                'message' => 'Create token falied!, message: '.$error->getMessage(),
            ]);
        }
    }

    public function login(Request $request)
    {
        try {
            $request->validate([
                'email' => 'email|required',
                'password' => 'required'
            ]);

            $credentials = request(['email', 'password']);
            if (!Auth::attempt($credentials)) {
                return response()->json([
                    'status' => false,
                    'data' => null,
                    'message' => 'Authentication Failed!'
                ]);
            }

            //Jika hash tidak sesuai
            $user = User::where('email', $request->email)->first();
            if (!Hash::check($request->password, $user->password, [])) {
                throw new \Exception('Invalid Credentials');
            }

            //jika berhasil maka login
            $tokenResult = $user->createToken('authToken')->plainTextToken;
            $data = [
                'access_token' => $tokenResult,
                'token_type' => 'Bearer',
                'user' => $user
            ];
            return response()->json([
                'status' => true,
                'data' => $data,
                'message' => 'Authenticated'
            ]);
        } catch (Exception $error) {
            // return $this->sendError(
            //     [
            //         'message' => 'Something went wrong',
            //         'error' => $error
            //     ],
            //     'Login Failed',
            // );
            return response()->json([
                'status' => false,
                'data' => null,
                'message' => 'Authentication Failed!'
            ]);
        }
    }

    public function logout()
    {
        $user = User::find(Auth::user()->id);

        $user->tokens()->delete();
        return response()->noContent();
    }
}
