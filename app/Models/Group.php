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

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function leaders()
    {
        return $this->hasMany(Leader::class);
    }

    public function members()
    {
        return $this->hasMany(Member::class);
    }

    use HasFactory;
}
