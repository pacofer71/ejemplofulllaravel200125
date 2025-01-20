<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        $this->call(DepartamentSeeder::class);
        $this->call(RoleSeeder::class);

        Storage::deleteDirectory('images/logos');
        Storage::makeDirectory('images/logos');
        $this->call(HumanSeeder::class);
    }
}
