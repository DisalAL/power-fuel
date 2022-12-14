<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['amount','vehicle_id'];

    protected $attributes = ['status' =>'PENDING', 'paid' => false];
}
