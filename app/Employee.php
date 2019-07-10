<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $primarykey ='id';
    protected $table = 'employee';
    protected $fillable = ['name','email','address','designation','phoneno'];
}
