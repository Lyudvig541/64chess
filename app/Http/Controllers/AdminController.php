<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('Admin.adminpanel');
    }
    public function index1(){
        return view('dashboard');
    }
}
