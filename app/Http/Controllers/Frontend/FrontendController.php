<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
}
