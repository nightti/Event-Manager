<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Event::create([
            'title' => 'Example Event 1',
            'category' => 1,
            'street' => '123 Main St',
            'postcode' => '12345',
            'city' => 'Anytown',
            'start_time' => '2023-05-20 18:00:00',
            'end_time' => '2023-05-20 22:00:00',
            'link' => 'https://example.com/event1',
            'price' => '9.99',
        ]);

        Event::create([
            'title' => 'Example Event 2',
            'category' => 2,
            'street' => '456 Elm St',
            'postcode' => '67890',
            'city' => 'Othertown',
            'start_time' => '2023-05-22 10:00:00',
            'end_time' => '2023-05-22 12:00:00',
            'link' => 'https://example.com/event2',
            'price' => '0.00',
        ]);

        Event::create([
            'title' => 'Example Event 3',
            'category' => 3,
            'street' => '789 Oak St',
            'postcode' => '54321',
            'city' => 'Anotherplace',
            'start_time' => '2023-05-25 19:30:00',
            'end_time' => '2023-05-25 22:30:00',
            'link' => 'https://example.com/event3',
            'price' => '19.99',
        ]);

        Event::create([
            'title' => 'Example Event 4',
            'category' => 1,
            'street' => '122 Main St',
            'postcode' => '76543',
            'city' => 'Phptown',
            'start_time' => '2024-05-20 18:00:00',
            'end_time' => '2024-05-20 22:00:00',
            'link' => 'https://example.com/event1',
            'price' => '25.99',
        ]);
    }
}
