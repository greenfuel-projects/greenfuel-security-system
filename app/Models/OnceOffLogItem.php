<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OnceOffLogItem extends Model
{
    use HasFactory;
    protected $table = 'once_off_log_items';

    protected $casts = [
        'items' => 'array',
    ];
}
