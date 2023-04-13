<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    protected $fillable = ['name','email','password'];

    public function isAdmin () {
        return $this->is_admin === 1;
    }

    public function orders () {
        return $this->hasMany(Order::class);
    }
}
