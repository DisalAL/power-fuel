<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HeadOffice extends Authenticatable
{
    protected $fillable = [
        'name',
        'email',
        'password',
        'location',
        'phone',
        'about',
        'password_confirmation'
    ];

    use HasFactory;
}
