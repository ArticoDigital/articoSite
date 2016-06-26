<?php

namespace Artico\Entities;

use Artico\Plan;
use Illuminate\Database\Eloquent\Model;

class Requirement extends Model
{
    protected $fillable = ['name','description','time'];


    public function Plan(){
        return $this->belongsToMany(Plan::class);
    }

    public function Position(){
        return $this->hasMany(Position::class);
    }

}
