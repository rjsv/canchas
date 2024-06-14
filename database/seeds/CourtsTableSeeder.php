<?php

use Illuminate\Database\Seeder;
use App\Court;

class CourtsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courts = [
            ['name' => 'Court 1', 'location' => 'Location A', 'available' => true, 'date' => '2024-06-12', 'status' => 'open'],
            ['name' => 'Court 2', 'location' => 'Location B', 'available' => false, 'date' => '2024-06-13', 'status' => 'closed'],
            ['name' => 'Court 3', 'location' => 'Location C', 'available' => true, 'date' => '2024-06-14', 'status' => 'maintenance'],
            ['name' => 'Court 4', 'location' => 'Location D', 'available' => false, 'date' => '2024-06-15', 'status' => 'open'],
            ['name' => 'Court 5', 'location' => 'Location E', 'available' => true, 'date' => '2024-06-16', 'status' => 'closed'],
        ];

        foreach ($courts as $court) {
            Court::create($court);
        }
    }
}
