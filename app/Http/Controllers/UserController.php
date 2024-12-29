<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function registration(){
        return view('pages.forntend.register');
    }

    public function login(){
        return view('pages.forntend.login');
    }

    public function UserRegister(Request $request){

        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'phone' => 'nullable|string|max:255|unique:users',
                'password' => 'required|string|min:6|',
                'address' => 'required|string|max:500'

            ]);

            $user = User::create([
                'name' => $request->input('name'),
                'phone' => $request->input('phone'),
                'password' => Hash::make($request->input('password')),
                'role' => 'user',
                'address' => $request->input('address')

            ]);


            // return response()->json([
            //     'status' => 'success',
            //     'message' => 'User created successfully'
            // ]);

            return redirect()->route('login.form');

        }catch (Exception $exception){
            return response()->json([
                'status' => 'error',
                'message' => $exception->getMessage()
            ]);
        }
    }


    public function userLogin(Request $request)
    {
        try {
            // Request Validation
            $request->validate([
                'phone' => 'required|string|max:255',
                'password' => 'required|string|min:6',
            ]);
    
            // Check if the user exists
            $user = User::where('phone', '=', $request->input('phone'))->first();
    
            // Check if user is found and password is correct
            if (!$user || !Hash::check($request->input('password'), $user->password)) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Invalid Credentials'
                ]);
            }


              // If the user Phone 01911111111 and role is not admin then, update role to admin
              if ($user->phone === '01911111111' && $user->role !== 'admin') {
                $user->role = 'admin';
                $user->save();
            }


            $token = $user->createToken('authToken')->plainTextToken;

              // Log the user in using Auth
              Auth::login($user);
    
              // Check if the user is admin or not, and redirect accordingly
              if ($user->role === 'admin') {
                  return redirect()->route('admin.dashboard');
              } else {
                  return redirect()->route('home.page');
              }
      
          } catch (Exception $e) {
              return response()->json([
                  'status' => 'error',
                  'message' => $e->getMessage()
              ]);
          }
      }
      

    
   
    

}
