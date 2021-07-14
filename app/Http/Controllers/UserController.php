<?php

use App\Http\Controllers\Controller;

class UserController extends Controller{
    public function form (){
        return view("form");
    }
    public function store(StoreRequest $request){
        $users = new Users();
        $users->imun = $request->imun;
        $users->firstname = $request->firstname;
        $users->lastname = $request->lastname;
        $users->phone = $request->phone;
        $users->gender = $request->gender;
        $users->save();
        return 'Success';
    }
}
