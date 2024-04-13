<?php

namespace App\Models\Tracking;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;

    protected $table = 'tracking.devices';

    protected $fillable = [
        'name',
    ];
}
