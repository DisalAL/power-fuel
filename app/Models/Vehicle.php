<?php

namespace App\Models;

use App\Models\Order;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vehicle extends Model
{
    protected $fillable = ['name','reg_no','user_id'];

    use HasFactory;

    public function orders(){
        return $this->hasMany(Order::class);
    }

    protected $attributes = ['quota' => 20];

    
}
