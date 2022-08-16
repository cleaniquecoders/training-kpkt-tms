<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    use HasFactory;

    protected $casts = [
        'started_at' => 'datetime',
        'ended_at' => 'datetime',
    ];

    public function getTotalDaysAttribute()
    {
        return $this->started_at->diffInDays($this->ended_at);
    }

    public function getDatesAttribute()
    {
        return $this->started_at->range($this->ended_at);
    }
}
