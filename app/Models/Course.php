<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Course extends Model
{
    use HasFactory, softdeletes;

    protected $guarded = [];
    protected $hidden = [
        'deleted_at',
    ];

    public function Category()
    {
        return $this->belongsTo(Category::class, 'cat_id');
    }

    public function setImageAttribute($image)
    {
        if (is_file($image)) {
            $imageFields = upload($image, 'Course');
            $this->attributes['image'] = $imageFields;
        }
    }

    public function getImageAttribute($image)
    {
        if (!empty($image)) {
            return asset('uploads/Course') . '/' . $image;
        }
        return asset('uploads/default.jpg');
    }
}
