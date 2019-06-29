<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** 
         * digunakan untuk mengenerate value dari tabel yang disediakan
         * untuk perintah menjalanakn menggunakan 'php artisan db:seed --class=EducationSeeder'
         */
        $limit = 20;
        $faker = Faker::create('App\Models\RoomModel');
        for ($i=0; $i < $limit; $i++) { 
            DB::table('room')->insert([
                'name' => $faker->name,
                'place' => $faker->state,
                'price' => $faker->randomNumber(2),
                'status' => $faker->randomDigitNotNull,
            ]);    
        }

    }
}
