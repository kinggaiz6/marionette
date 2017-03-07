<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
  protected $fillable = [
      'user_id', 'user_name', 'user_password'
  ];
}
