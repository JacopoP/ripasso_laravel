<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stone extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'place_of_find',
    ];
    public function owner(){
        return $this->belongsTo(Owner::class);
    }
    public function categories(){
        return $this->belongsToMany(Category::class);
    }
}
