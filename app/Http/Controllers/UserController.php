<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\User;

class UserController extends Controller
{
    public function login(Request $req){
        return $req->input();
        return User::Where(['email'=>$req->email])->first();
        //  return $eq->input();
    }
}
