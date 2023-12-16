<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Room;
use App\Models\Type;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Schema::disableForeignKeyConstraints();
        Type::truncate();
        Room::truncate();
        User::truncate();
        Schema::enableForeignKeyConstraints();

        User::factory(5)->create();
    }
}
