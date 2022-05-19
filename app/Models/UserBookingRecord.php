<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserBookingRecord extends Model
{
    use HasFactory;

    protected $fillable =['movie_title','user_name','user_tel','user_email','R1','R2','R3','R4'];
    public function userDetails()
    {
        return $this->belongsTo(User::class);
    }
}
