<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {
        return view('home');
    }

    public function store() {
        var_dump('login');
    }

    public function destroy() {
        var_dump('logout');
    }
}
