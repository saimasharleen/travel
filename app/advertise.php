<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class advertise extends Model
{
     
    protected $table = 'advertisement';
    protected $primaryKey ='id' ;
    protected $fillable = ['image'];
}
