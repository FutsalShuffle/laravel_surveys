<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    public function questions()
    {
        return $this->hasMany('\App\Questions', 'survey_id', 'id');
    }
}
