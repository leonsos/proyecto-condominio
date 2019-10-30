<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    protected $fillable = [
        'name',
    ];

    public function residence()
    {
        return $this->belongsTo(Residence::class);
    }
}
