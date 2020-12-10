<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\User;
use App\Models\UserProfile;
use Mail;
use App\Mail\UserCheckoutMail;
use Auth;

class FrontendController extends Controller
{
    public function faq()
    {
        return view('client.faq');
    }

    public function training()
    {
        return view('client.training');
    }

    public function checkout()
    {
        return view('client.checkout');
    }

    public function user_checkout(UserRequest $request)
    {
        $password = $this->generateRandomString(10);
        $user = new User;
        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->email = $request->email;
        $user->password = bcrypt($password);
        $user->phone_number = $request->phone_number;
        $user_profile = new UserProfile;
        $user_profile->home_address = $request->home_address;
        $user_profile->street_address = $request->street_address;
        $user_profile->office_address = $request->office_address;
        $user_profile->country = $request->country;
        $user_profile->city = $request->city;
        $user_profile->state = $request->state;
        $user_profile->zipcode = $request->zipcode;
        $user->save();
        $user_profile->user_id = $user->id;
        $user_profile->save();
        $details = array(
            'subject' => 'Login Credentails',
            'body' => 'Below are the login details:',
            'email' => $request->email,
            'password' => $password
        );
        Mail::to($request->email)->send(new UserCheckoutMail($details));
        Auth::attempt(['email' => $request->email, 'password' => $password]);
        return redirect()->intended('user/profile');
    }

    public function generateRandomString($length) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
