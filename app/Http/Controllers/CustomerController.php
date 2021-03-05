<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        return view('customer.dashboard');
    }
    public function booking(){
        return view('customer.booking');
    }
    public function profile(){
        return view('customer.profile');
    }
}
