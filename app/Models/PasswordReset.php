<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PasswordReset extends Model
{
    protected $table = 'password_resets';

    protected $primaryKey = 'email';

    public $incrementing = false;

    protected $fillable = [
        'email', 'token' 
    ];
}