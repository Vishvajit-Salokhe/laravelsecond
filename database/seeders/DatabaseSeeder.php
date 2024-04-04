<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\UserDetailsModel;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create 50 User records
        User::factory(50)->create()->each(function ($user) {
            // For each User, create UserDetailsModel
            UserDetailsModel::factory()->create([
                'eid' => $user->id
            ]);
        });
    }
}
