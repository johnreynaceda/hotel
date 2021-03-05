<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }
    public function booked(){
        return view('admin.booked');
    }
    public function checkin(){
        return view('admin.check-in');
    }
    public function checkout(){
        return view('admin.check-out');
    }
    public function category(){
        return view('admin.category');
    }
    public function room(){
        return view('admin.room');
    }
    public function user(){
        return view('admin.user');
    }
}
