<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $hidden = ['password', 'remember_token'];

	public function scopeStatus($query, $email)
	{
		return $query->where('email', $email);
	}
}
