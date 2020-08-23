<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    protected $fillable = ['name', 'age', 'phonsel_number', 'email', 'title', 'job_desk', 'activated'];
}
