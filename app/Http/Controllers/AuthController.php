<?php


namespace App\Http\Controllers;


class AuthController
{

    public function register()
    {

        return view('auth.register');

    }

    public function login()
    {

        return view('auth.login');

    }


}