<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class movieUpload extends Model
{
    use HasFactory;

    protected $fillable = ['movie_title','movie_descr','movie_type','movie_genre','movie_hr','movie_mins','movie_lang','movie_catr','movie_img','movie_link','added_by'];
}
