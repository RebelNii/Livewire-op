<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Countries extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'continent_id'
    ];

    public function Continents(){
        return $this->belongsTo(Continents::class, 'continents_id');
    }
}
