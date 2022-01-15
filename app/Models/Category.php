<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory,softdeletes;
    protected $guarded = [];
    protected $hidden = [
        'deleted_at',
    ];
    public function Course(){
     return   $this->hasMany(Course::class,'cat_id');
    }
}
