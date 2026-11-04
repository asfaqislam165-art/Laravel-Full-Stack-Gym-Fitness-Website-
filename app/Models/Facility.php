<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    use HasFactory;

    // Ei line-ti obossoi thakte hobe, jate title, description ebong image database-e save hote pare
    protected $fillable = [
        'title',
        'description',
        'image',
    ];
}