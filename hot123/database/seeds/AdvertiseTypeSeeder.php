<?php

use Illuminate\Database\Seeder;

class AdvertiseTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\AdvertiseType::create([
            'type' => 'fixed',
            'width' => 1024,
            'height' =>90,
        ]);

        \App\AdvertiseType::create([
            'type' => 'fixed',
            'width' => 512,
            'height' =>90,
        ]);

        \App\AdvertiseType::create([
            'type' => 'fixed',
            'width' => 256,
            'height' =>90,
        ]);

        \App\AdvertiseType::create([
            'type' => 'float',
            'width' => 80,
            'height' => 320,
        ]);
    }
}
