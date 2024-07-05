<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Register;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    // 初期画面
    public function index()
    {
      return view('register');
    }

    // 会員登録機能
    public function store(RegisterRequest $request)
    {
        $Regiser = $request->only(['name', 'email', 'password', 'confirmation password']);
        Register::create($Register);
        return view('login');
    }

}
