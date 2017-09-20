<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    public function region()
    {
        return $this->hasOne('\App\Region','name', 'region');
    }
}
