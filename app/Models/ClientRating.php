<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientRating extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function Client(){
       return $this->belongsTo(Client::class,'client_id','id');
    }
    public function Course(){
       return $this->belongsTo(Course::class,'course_id','id');
    }

}
