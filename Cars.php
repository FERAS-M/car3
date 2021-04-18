<?php

namespace App\Models;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Http\Controllers\backend\AddcarController;

class Cars extends Model
{
    use HasFactory;

    protected $fillable = [
        'model',
        'name',
        'cochear',
        'pdate',
        'photo',
        'user_id',
        'id',
    ];
   
    public function users()
    {
        return $this->hasOne('App\Models\User');
    }
}
