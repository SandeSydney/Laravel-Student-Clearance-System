<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Finance;

use App\Models\Library;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('role:superadministrator');
    }

    public function index(Request $request){

        $users = User::all();

        $finances = Finance::all();

        $libraries = Library::all();

        return view('admin.index')->with(['finances'=>$finances, 'users'=>$users, 'libraries' => $libraries]);
    }
}
