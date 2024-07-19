<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRegistration extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:user_registrations',
        'password' => 'required|string|min:8|confirmed',
    ];

    protected $timestamps = true;
}
