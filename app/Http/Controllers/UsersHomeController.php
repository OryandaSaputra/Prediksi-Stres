<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersHomeController extends Controller
{
    /**
     * Show the users' home page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('users.home');
    }
}
