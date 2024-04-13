<?php

namespace Database\Seeders\Tracking;

use App\Models\Tracking\Device;
use Illuminate\Database\Seeder;

class DeviceSeeder extends Seeder
{
    public function run(): void
    {
        Device::factory(100)->create();
    }
}
