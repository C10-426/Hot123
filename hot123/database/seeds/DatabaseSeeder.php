<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< 7bbf59133fafd5b2e7b79846775ecba3aa6a3b9a
        $this->call(UsersTableSeeder::class);
=======
        $this->call(AdvertiseTableSeeder::class);
        // $this->call(UsersTableSeeder::class);
        // $this->call(AdvertiseTypeSeeder::class);
>>>>>>> [gentleh 2017/09/24] add advertise model, controller, view
    }
}
