<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function dashboard(){
        return view('dashboard');
    }
     public function referals(){
        return view('referals');
    }
     public function invoices(){
        return view('invoices');
    }

}
