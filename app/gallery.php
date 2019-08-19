<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gallery extends Model
{
    protected $table = 'gallery';
    protected $primaryKey ='id' ;
    protected $fillable = ['image'];
}
