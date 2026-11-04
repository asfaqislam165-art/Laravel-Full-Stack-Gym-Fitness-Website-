<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Trainer extends Model {
    protected $fillable = ['name', 'speciality', 'phone', 'email', 'bio', 'image'];
}