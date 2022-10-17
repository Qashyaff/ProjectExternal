<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userportfolio extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'email',
        'password',
        'phonenumber',
        'socialmedia',
        'updated_at',
        'created_at'
    ];
        
}
