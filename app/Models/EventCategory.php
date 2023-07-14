<?php

namespace App\Models\EventCategory;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventCategory extends Model
{
    use HasFactory;

    protected $table = 'event_categories';

    protected $fillable = ['name', 'description'];

    public function create()
    {
        $eventCategories = EventCategory::all();
        return view('events.create', compact('eventCategories'));
    }
    
    public function events()
    {
        return $this->hasMany(Event::class);
    }



}
