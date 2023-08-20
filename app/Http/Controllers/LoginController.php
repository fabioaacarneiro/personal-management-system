<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {
        return view('login');
    }

    public function store() {
        return view('login');
    }

    public function destroy() {
        var_dump('logout');
    }
}
