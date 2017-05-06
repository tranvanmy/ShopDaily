<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ThanhVienRequest;

class ThanhVienController extends Controller
{
    public function getLogin()
    {
        return view('auth.login');
    }

    public function postLogin(ThanhVienRequest $request)
    {
       
    }
    public function test()
    {
        return view('admin.index');
    }
}
