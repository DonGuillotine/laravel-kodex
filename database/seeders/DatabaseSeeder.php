<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Jobs;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(100)->create();

        $user = User::factory()->create([
            'name' => 'Pagan Min',
            'email' => 'paganmin@farcry.com'
        ]);

        Jobs::factory(6)->create([
            'user_id' => $user->id
        ]);
    }
}
