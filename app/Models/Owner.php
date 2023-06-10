<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'last',
        'bio'
    ];
    public function stones(){
        return $this->hasMany(Stone::class);
    }
}
