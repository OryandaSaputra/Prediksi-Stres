<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\PoliSeeder;
use Database\Seeders\DaftarSeeder;
use Database\Seeders\PasienSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
        ]);

        $this->call(PasienSeeder::class);
        $this->call(PoliSeeder::class);
        $this->call(DaftarSeeder::class);
    }
}
