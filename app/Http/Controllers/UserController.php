<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function changeAvatar(Request $request)
    {
        \Auth::user()->avatar = $request->newAvatar;
        \Auth::user()->save();
        return back();
    }
}
