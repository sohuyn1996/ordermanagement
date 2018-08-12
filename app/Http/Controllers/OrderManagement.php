<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderManagement extends Controller
{
    public function index(){
      return view('order.index');
    }
}
