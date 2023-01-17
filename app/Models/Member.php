<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'memberFullName',
        'memberEmail',
        'memberWA',
        'memberLine',
        'memberGithub',
        'birthPlace',
        'birthDate',
        // 'memberCV',
        // 'memberFlazz',
        'group_id',
    ];

    public function groups()
    {
        return $this->belongsTo(User::class);
    }
}