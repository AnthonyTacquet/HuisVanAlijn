<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Room;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoomSeeder::class,
            CompanySeeder::class,
            TypeSeeder::class,
            MakerSeeder::class,
            ProductionSeeder::class,
            PuppetSeeder::class,
            PuppetsMakersSeeder::class,
            PuppetsProductionsSeeder::class,
        ]);
    }
}
