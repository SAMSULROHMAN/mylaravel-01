<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $table = 'Karyawan';
    protected $fillable = ['name','email','post','image'];
}
