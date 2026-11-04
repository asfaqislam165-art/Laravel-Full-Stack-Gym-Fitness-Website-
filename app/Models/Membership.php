<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'member_name',
        'email',
        'phone',
        'package_type',
        'start_date',
        'note',
        'status',
    ];

    /**
     * Relationship with User model (Optional, but good to have)
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}