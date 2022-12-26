<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = [
        'groupName',
        'password',
        'binusian',
        'verfStatus'
    ];

    protected $attributes = [
        'verfStatus' => 0
    ];

    use HasFactory;
}
