<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Course extends Model
{
    use HasFactory,softdeletes;
    protected $guarded = [];

    public function Category()
    {
        return $this->belongsTo(Category::class, 'cat_id');
    }
    public function getImageAttribute($image)
    {
        if (!empty($image)) {
            return asset('storage/app/public/course') . '/' . $image;
        }
        return asset('uploads/default.jpg');
    }

}
