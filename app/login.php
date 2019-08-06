<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class login extends Model
{
	protected $table      = 'userlogin';
    protected $primaryKey = 'id';
	public    $timestamps = false;
}
