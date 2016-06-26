<?php

namespace Artico\Entities;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $fillable = ['name','hour_price','description','position_id'];

    public function position()
    {
        return $this->belongsTo(Position::class);
    }

}
