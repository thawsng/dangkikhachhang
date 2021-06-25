<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dangki(){
        return view('user.dangki');
    }
    function xuLiDangki(Request $request){
        $fullname = $request->get('fullname');
        $email = $request->get('email');
        $phone = $request->get('phone');
        $address = $request->get('address');
        $identitycard = $request->get('identitycard');
        return $fullname . ' ' . $email . ' ' . $phone . ' ' . $address . ' ' . $identitycard;
    }
}
