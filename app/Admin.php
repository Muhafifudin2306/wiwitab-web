<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
  protected $guard = 'admins';

  protected $fillable = [
    'name', 'email', 'password',
  ];

  protected $hidden = [
    'password', 'remember_token',
  ];
}