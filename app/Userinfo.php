<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userinfo extends Model
{
	protected $table      = 'user';
    protected $primaryKey = 'id';
	public    $timestamps = false;
}
