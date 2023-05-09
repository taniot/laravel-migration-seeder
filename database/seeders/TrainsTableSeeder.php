<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        //DB::table('trains')->truncate();

        for ($i = 0; $i < 50; $i++) {
            $table = new Train();

            //campi da modificare
            $table->company = $faker->company();

            $table->departure_station = $faker->city();
            $table->arrival_station = $faker->city();

            while ($table->departure_station === $table->arrival_station) {
                $table->arrival_station = $faker->city();
            }

            $table->departure_time = $faker->dateTimeBetween('-2 days', '+2 days');
            $table->arrival_time = Carbon::parse($table->departure_time)->addHours(rand(1, 23));
            $table->train_code = $faker->bothify('###???');
            $table->coaches = $faker->randomDigit();
            $table->on_time = $faker->boolean(20);
            $table->cancelled = $faker->boolean();

            $table->save();
        }
    }
}
