<?php

namespace App\Http\Controllers;

use App\Http\Requests\SigninRequest;
use App\Http\Requests\SignupRequest;
use App\User;
use Session;

class UserController extends MainController
{
    public function __construct()
    {
        parent::__construct();
        $this->middleware('authuser', ['except' => ['logout', 'profilePage']]); // in the [ name of method ]
    }

    public function getSignin()
    {
        self::$data['pageTitle'] .= ' Signin Page';
        self::$data['errors_top'] = false;
        return view('forms.signin', self::$data);
    }

    public function getSignup()
    {
        self::$data['pageTitle'] .= ' Signup Page';
        self::$data['errors_top'] = false;
        return view('forms.signup', self::$data);
    }
    public function postSignup(SignupRequest $request)
    {
        User::save_new($request);
        return redirect('/');
    }

    public function postSignin(SigninRequest $request)
    {
        if (User::authUser($request['email'], $request['password'])) {
            $rn = !empty($request['rn']) ? $request['rn'] : '/';
            return redirect($rn);
        } else {
            self::$data['pageTitle'] .= ' Signin Page';
            self::$data['auth_error'] = ' * Wrong email or password.';
            return view('forms.signin', self::$data);
        }
    }
    public function logout()
    {
        Session::flush();
        Session::flash('sm', 'You have logged out successfully!');
        return redirect('user/signin');
    }
    public function profilePage()
    {
        self::$data['pageTitle'] .= ' Profile Page';
        return view('content.profile', self::$data);
    }
}