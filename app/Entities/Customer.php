<?php

namespace Artico\Entities;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['name','last_name','email','company','NIT','phone','cellphone'];
}
