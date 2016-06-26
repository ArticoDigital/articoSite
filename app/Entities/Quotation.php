<?php

namespace Artico\Entities;

use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    protected $fillable = ['isAccepted','description','user_id','customer_id','email-send'];

    public function Requirements(){
        return $this->belongsToMany(Requirements::class);
    }


}
