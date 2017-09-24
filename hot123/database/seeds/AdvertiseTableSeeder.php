<?php

use Illuminate\Database\Seeder;

class AdvertiseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('advertises')->delete();

        for ($i = 0; $i < 8; $i++) {
            $image = ($i + 1) % 4;
            if ($image == 0) {
                $image += 4;
            }
            \App\Advertise::create([
                'type_id' => 4,
                'ad_plaform_id'   => 'plaform_ '.$i,
                'ad_url'    => 'https://www.baidu.com',
                'ad_price' => $i,
                'show_count' => $i,
                'ad_image_url' => 's'.$image.'.gif',
                'start_time' => new \DateTime('2016-06-'.$i),
                'end_time' => new \DateTime('2017-06-'.$i),
                'ad_description' => 'ad_desciption_'.$i,
            ]);
        }
        for ($i = 0; $i < 2; $i++) {
            \App\Advertise::create([
                'type_id' => 1,
                'ad_plaform_id'   => 'plaform_ '.$i,
                'ad_url'    => 'https://www.baidu.com',
                'ad_price' => $i,
                'show_count' => $i,
                'ad_image_url' => 'b1.gif',
                'start_time' => new \DateTime('2016-06-'.$i),
                'end_time' => new \DateTime('2017-06-'.$i),
                'ad_description' => 'ad_desciption_'.$i,
            ]);
        }
        for ($i = 0; $i < 2; $i++) {
            \App\Advertise::create([
                'type_id' => 2,
                'ad_plaform_id'   => 'plaform_ '.$i,
                'ad_url'    => 'https://www.baidu.com',
                'ad_price' => $i,
                'show_count' => $i,
                'ad_image_url' => 'b2.gif',
                'start_time' => new \DateTime('2016-06-'.$i),
                'end_time' => new \DateTime('2017-06-'.$i),
                'ad_description' => 'ad_desciption_'.$i,
            ]);
        }
        for ($i = 0; $i < 4; $i++) {
            \App\Advertise::create([
                'type_id' => 3,
                'ad_plaform_id'   => 'plaform_ '.$i,
                'ad_url'    => 'https://www.baidu.com',
                'ad_price' => $i,
                'show_count' => $i,
                'ad_image_url' => 'b3.gif',
                'start_time' => new \DateTime('2016-06-'.$i),
                'end_time' => new \DateTime('2017-06-'.$i),
                'ad_description' => 'ad_desciption_'.$i,
            ]);
        }
    }
}