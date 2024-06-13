<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class ProfileController extends Controller
{
    public function index($id)
    {
      
       // variables and assign the values
        $name = "Donal Trump";
        $age = "75";

//associative array
        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age,
        ];

//cookies
        $cookieName = 'access_token';
        $cookieValue = '123-XYZ';
        $minutes = 1;
        $path = '/';
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $httpOnly = true;

  
        $cookie = Cookie::make($cookieName, $cookieValue, $minutes, $path, $domain, $secure, $httpOnly);

       
        return response()->json($data, 200)->cookie($cookie);
    }
}
