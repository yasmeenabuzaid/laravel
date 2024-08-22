<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = 'Movies';
    protected $primaryKey = 'id';
    protected $fillable = ['movie_name', 'movie_description', 'movie_gener'];
    use HasFactory;
}