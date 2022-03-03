<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Message, User, Topic};
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    
    public static function login(Request $request) 
    {
        die('ok');
    }

    public static function register(Request $request) 
    {
        /*
        
        $pierre = new User();
        $pierre->firstname = 'pierre';
        $pierre->lastname = 'pierre';
        $pierre->nickname = 'pierre';
        $pierre->email = 'pierre@pierre.fr';
        $pierre->password = Hash::make($request->newPassword);

        $pierre->save();
        */

        die('okok');
    }
}
