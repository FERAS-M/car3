<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cars;

class Feras extends Model
{
    use HasFactory;
    protected $fillable = [
        'carname',
        'username',
        'lictype',
        'licstart',
        'licend',
        'price',
    ];
    public function cars()
    {
        return $this->hasOne('App\Models\Cars');
    }
}
