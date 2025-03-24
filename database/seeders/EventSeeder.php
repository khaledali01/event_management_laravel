<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event; // <-- Import Event model

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Event::create([
            'title' => 'Laravel Conference 2024',
            'description' => 'A Laravel developer event.',
            'event_date' => '2024-10-10 10:00:00',
            'venue' => 'New York Convention Center',
            'available_seats' => 100,
            'ticket_price' => 50.00,
            'user_id' => 1
        ]);
    }
}
