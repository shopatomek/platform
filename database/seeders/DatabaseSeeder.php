<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        Listing::factory(10)->create();

        // Listing::create([
        //     'title' => 'Web Dev',
        //     'tags' => 'larabel',
        //     'company' => 'Niktosoft',
        //     'location' => 'Mars',
        //     'email' => 'email@da.com',
        //     'website' => 'www.mars.com',
        //     'description' => "Loream"
        // ]);


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
