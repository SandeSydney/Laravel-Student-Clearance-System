<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('role:user|administrator');
    }

    public function clearanceForm(){
        return(view('user.clearance-form'));
    }

    public function userProfile(){
        return(view('user.user-profile'));
    }

    public function notifications(){
        return(view('user.notifications'));
    }
}
