<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserVerification extends Model
{
    protected $fillable = ['email', 'token', 'created_at'];

    public $timestamps = false;
}
