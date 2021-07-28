<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $table = "cities";
    protected $fillable =
    [
        'city'
    ];
    public function member()
    {
        return $this->hasMany('App\Models\member','city_id','id');
    }
}
