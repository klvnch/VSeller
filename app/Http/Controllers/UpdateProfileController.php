<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UpdateProfileController extends Controller
{
    //
    public function update(Request $request){
        $user = Auth::user();
        $users = User::all();
        if(strcmp($request['username'], Auth::user()->username) != 0){
            foreach($users as $us){
                if(strcmp($us->username, $user->username) == 0){
                    return redirect('/profile')->with('invalid', 'Username already taken!');
                }
            }
        }
        $user->username = $request['username'];
        $user->fullname = $request['fullname'];

        if($request->filled('oldpass')){
            if(!(Hash::check($request['oldpass'], Auth::user()->password))){
                return redirect('/profile')->with('invalid', 'Your current password is wrong!');
            }
            if(strcmp($request['oldpass'], $request['newpass']) == 0){
                return redirect('/profile')->with('invalid', 'New password cant be the same like the old one!');
            }
            if(strcmp($request['newpass'], $request['confpass']) != 0){
                return redirect('/profile')->with('invalid', 'Please match your password!');
            }
            $validateData = $request->validate([
                'oldpass' => ['required', 'string', 'min:6'],
                'newpass' => ['required', 'string', 'min:6'],
                'confpass' => ['required', 'string', 'min:6']
            ]);

            $user->password = Hash::make($request['newpass']);
        }

        $user->save();
        return redirect('/profile')->with('invalid', 'Profile has been changed!');
    }
}
