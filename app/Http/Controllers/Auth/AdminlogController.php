<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminlogController extends Controller
{
 public function showLoginForm(){
     return view ('auth.admin-login')
 }
 public function login(){
     return true;
 }
}
