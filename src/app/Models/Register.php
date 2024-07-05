<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasFactory;
    // 会員登録
    protected $fillable = [
        'name',
        'email',
        'password',
        'confirmation password'
    ];
}
