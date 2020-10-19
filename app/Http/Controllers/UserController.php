<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function clearanceForm(){
        return(view('clearance-form'));
    }

    public function userProfile(){
        return(view('user-profile'));
    }

    public function notifications(){
        return(view('notifications'));
    }
}
