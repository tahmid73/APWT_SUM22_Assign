<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\auth\user;

class loginController extends Controller
{
    function createSubmit(Request $req){
        $this->validate($req,
            [
                "name"=>"required|max:10|min:3",
                "id"=>"required|regex:/^([0-9]{2}-[0-9]{5}-[1-3]{1}[@])+$/i",
                "dob"=>"required",
                "email"=>"required|",
                "password"=>"required|min:8",
                "conf_password"=>"required|min:8|same:password"
            ],
        
            [
                "name.required"=>"Please provide your name",
                "name.max"=>"Name should not exceed 10 characters",

                
            ]);
            $st = new users();
            $st->name = $req->name;
            $st->email =$req->email;
            $st->dob = $req->dob;
            $st->save();
        return "Form submitted";
        
    }
}
