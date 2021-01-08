<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'regNumber' => ['unique:users', 'min:10','max:12'],
            'IdNumber' => ['unique:users', 'min:8', 'max:10'],
            'phoneNumber' => ['min:10', 'max:10'],
            'course' => ['string'],
            'gender' => ['string', 'max:7'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $user =  User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'regNumber' => Str::upper($data['regNumber']),
            'IdNumber' => $data['IdNumber'],
            'phoneNumber'=> $data['phoneNumber'],
            'course' => $data['course'],
            'gender' => $data['gender'],
            'password' => Hash::make($data['password']),
        ]);
        $user->attachRole('user');
        return $user;
    }
}
