<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Residence extends Model
{
    protected $fillable = [
        'name', 'address','phone','city','president','president_phone',
    ];

    public function buildings()
    {
        return $this->hasmany(Building::class);
    }
}
