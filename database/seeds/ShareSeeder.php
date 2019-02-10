<?php

use Illuminate\Database\Seeder;

class ShareSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for($i=0;$i<500;$i++){
            DB::table('shares')->insert([
                'share_name' => $faker->company,
                'share_quantity' => $faker->numberBetween(5,100),
                'share_price' => $faker->randomFloat(2,5.0,100.0),
                'share_description' => $faker->paragraphs(3,true),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);
        }
    }
}
