<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    use HasFactory;

    protected $table = 'members';
    protected $primaryKey = 'id';
    protected $fillable = [
        'memberFullName',
        'memberEmail',
        'memberWA',
        'memberLine',
        'memberGithub',
        'birthPlace',
        'birthDate',
        'memberCV',
        'memberFlazz',
        'groupID',
    ];

    public function groups()
    {
        return $this->belongsTo(Group::class);
    }
}
