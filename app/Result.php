<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    public function answers()
    {
        return $this->hasMany('\App\Answer', 'result_id', 'id');
    }
}
