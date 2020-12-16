<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;
use App\User;
use Auth;
use Hash;
use App\Http\Requests\PasswordRequest;
use Session;

class UserController extends Controller
{
    public function user_profile()
    {
        return view('client.profile');
    }

    public function update_profile(ProfileRequest $request)
    {
        $user = User::find(Auth::user()->id);
        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->email = $request->email;
        $user->phone_number = $request->phone_number;
        $user->update();
        Session::flash('profile_updated', 'Profile Details Updated');
        return redirect()->route('user_profile');
    }

    public function update_password(Request $request)
    {
        $check = Hash::check($request->old_password, Auth::user()->password);
        if ($check) {
            $user = User::find(Auth::user()->id);
            $user->password = Hash::make($request->new_password);
            $user->update();
            Session::flash('password_updated', 'Password Updated Successfully!');
            return redirect()->route('user_profile');
        } else {
            Session::flash('wrong_pass', 'Old Password is incorrect!');
            return redirect()->route('user_profile');
        }
    }
}
