<?php

namespace Database\Seeders;

use Database\Seeders\Tracking\DeviceSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            DeviceSeeder::class,
        ]);
    }
}
