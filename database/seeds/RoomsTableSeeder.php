<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class RoomsTableSeeder extends Seeder
{
    
    public function run()
    {
        /**
         * digunakan untuk mengenerate value dari tabel yang disediakan
         * untuk perintah menjalanakn menggunakan 'php artisan db:seed --class=EducationSeeder'
         */
        $limit = 100;
        $faker = Faker::create('App\User');
        for ($i=0; $i < 10; $i++) {
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => bcrypt('secret'),
            ]);
        }
        
        $faker = Faker::create('App\Models\RoomModel');
        for ($i=0; $i < $limit; $i++) {
            DB::table('room')->insert([
                'name' => $faker->name,
                'place' => $faker->state,
                'price' => $faker->randomNumber(2),
                'status' => $faker->randomDigitNotNull,
            ]);
        }

        $faker = Faker::create('App\Models\BorrowModel');
        for ($i=0; $i < $limit; $i++) {
            DB::table('borrow')->insert([
                'room_id' => $faker->unique->randomDigitNotNull,
                'name' => $faker->catchPhrase,
                'borrower' => $faker->name,
                'start_date' => $faker->dateTime,
                'end_date' => $faker->dateTime,
                'booking' => $faker->dateTime,
                'status' => $faker->randomDigitNotNull,
            ]);
        }

    }
}
