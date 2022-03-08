<?php

namespace Muradsaifi\Bulkemailtool\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bulkemailtool extends Model
{
    use HasFactory;

    protected $casts = [
        'email_list' => 'array',
    ];

    protected $fillable = [
        'subject', 'message', 'email_list'
    ];
}
