<?php

namespace Artico;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $fillable = ['name','description'];

    public function requirements(){
        return $this->belongsToMany(Requirements::class);
    }
}
