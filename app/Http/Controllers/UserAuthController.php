<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserAuth;
use Hash;
use Session;

class UserAuthController extends Controller
{

    //
    public function UserRegistration(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:10'
        ]);

        $user = new UserAuth();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->usertype = $request->usertype;
        $req = $user->save();
        if ($req) {
            return back()->with('success', 'You have successfully registered');

        } else {
            return back()->with('fail', 'something worng');

        }

    }
    // public function UserLogin(Request $request)
    // {

    //     $request->validate([

    //         'email' => 'required|email',
    //         'password' => 'required|min:5|max:10'
    //     ]);
    //     $user = UserAuth::where('email', '=', $request->email)->first();
    //     if ($user) {
    //         if (Hash::check($request->password, $user->password)) {
    //             $request->session()->put('loginId', $user->id);
    //             return redirect('dashboard');

    //         } else {
    //             return back()->with('fail', 'Incorrect password');
    //         }

    //     } else {
    //         return back()->with('fail', 'Email is not registered');
    //     }

    // }

    public function UserLogin(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5|max:10'
        ]);

        // Check if a user with the given email exists
        $user = UserAuth::where('email', '=', $request->email)->first();

        if ($user) {
            // If the user exists, check if the provided password matches the hashed password in the database
            if (Hash::check($request->password, $user->password)) {
                // If the passwords match, store the user's ID in the session
                $request->session()->put('loginId', $user->id);

                // Check user role
                if ($user->usertype === 'Admin') {
                    // Redirect to admin dashboard
                    return redirect('dashboard');
                } elseif ($user->usertype === 'Doctor') {
                    // Redirect to user dashboard
                    return redirect('doctors');
                } else {
                    // Handle other roles or scenarios accordingly
                    return redirect('index');
                }
            } else {
                // If the passwords do not match, return back with an error message
                return back()->with('fail', 'Incorrect password');
            }
        } else {
            // If no user is found with the given email, return back with an error message
            return back()->with('fail', 'Email is not registered');
        }
    }

}
