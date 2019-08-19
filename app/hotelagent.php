<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hotelagent extends Model
{
    protected $table = 'hotel';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
