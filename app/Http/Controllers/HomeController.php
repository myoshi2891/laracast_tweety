<?php

namespace App\Http\Controllers;

use App\Models\Tweet;

class HomeController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth');
  }

  // public function index()
  // {
  // return view('dashboard', [
  // 'tweets' => Tweet::all()
  // ]);
  // }
}