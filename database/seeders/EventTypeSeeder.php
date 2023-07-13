<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Seeder;

class EventTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Event::create([
            'name' => 'Report Release',
        ]);

        Event::create([
            'name' => 'Activation',
        ]);

        Event::create([
            'name' => 'Team Building',
        ]);

        Event::create([
            'name' => 'Charity',
        ]);
    }
}
