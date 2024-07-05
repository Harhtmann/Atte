<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
   // ログイン機能
  public function store(Request $request)
  {
    $Regiser = $request->only(['email', 'password']);
    Register::create($Register);

  }
}
