<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function getDeadlineAttribute($date)
    {
        return $date ? date('m/d/Y', strtotime($date)) : null;
    }
}
