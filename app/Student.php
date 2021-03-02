<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['nama','nis','jenis_kelamin','alamat','email'];
}
