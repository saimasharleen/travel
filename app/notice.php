<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class notice extends Model
{
    protected $table      = 'notice';
    protected $primaryKey = 'id';
	public    $timestamps = false;
}
