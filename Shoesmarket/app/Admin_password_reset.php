<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $email
 * @property string $token
 * @property string $created_at
 */
class Admin_password_reset extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['email', 'token', 'created_at'];

}
