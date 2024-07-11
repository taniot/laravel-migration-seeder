<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsDefaultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $train = new Train();
        //dati da inserire
        $train->company = 'treniseeder';
        $train->departure_station = 'Trento';
        $train->arrival_station = 'Firenze';
        $train->departure_time = '2024-08-12 12:34:00';
        $train->arrival_time = '2024-08-12 16:34:00';
        $train->train_code = 'TF005';
        $train->cars_number = 15;
        $train->on_time = 1;
        $train->is_deleted = 0;

        $train->save();
    }
}
