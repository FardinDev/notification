<?php

namespace App\Http\Controllers;

use Flashy;
use Illuminate\Http\Request;

class testController extends Controller
{
    public function index()
    {
      Flashy::info('Hey there',  'http://facebook.com');

      return view('welcome');
    }
}
