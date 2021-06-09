<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    use SoftDeletes;

    //Relacion Polimorfica

    public function images (){
        return $this->morphTo();
    }

}
