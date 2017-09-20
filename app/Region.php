<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $table = 'regions';

    public function leagues()
    {
        return $this->hasMany('\App\League','');
    }

    public function clubs()
    {
        return $this->hasMany('\App\Club','region', 'name')->orderBy('name', 'ASC');
    }
}
