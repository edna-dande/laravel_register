<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'frequency', 'event_banner', 'owner', 'start_date', 'lead_date'];

    public function user()
    {
    return $this->belongsTo(User::class);
    }
}
