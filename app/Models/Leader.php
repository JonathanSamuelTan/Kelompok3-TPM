<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leader extends Model
{
    protected $fillable = [
        'leaderName',
        'leaderEmail',
        'leaderWA',
        'leaderLine',
        'leaderGithub',
        'birthPlace',
        'birthDate',
        // 'leaderCV',
        // 'leaderFlazz',
        'group_id'
    ];

    // protected $attributes = [
    //     'leaderFlazz' => NULL
    // ];

    public function groups()
    {
        return $this->belongsTo(User::class);
    }

    use HasFactory;
}
