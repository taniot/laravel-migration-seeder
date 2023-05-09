<?php

namespace Database\Seeders;

use App\Functions\Helpers;
use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsCSVTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $file_stream = __DIR__ . '/csv/trains.csv';

        $trains = Helpers::getCSV($file_stream);

         //campi da modificare
        foreach($trains as $train){
            $table = new Train();
            $table->company = $train['company'];
            $table->departure_station = $train['departure_station'];
            $table->arrival_station = $train['arrival_station'];
            $table->departure_time = $train['departure_time'];
            $table->arrival_time = $train['arrival_time'];
            $table->train_code = $train['train_code'];
            $table->coaches = $train['wagons_number'];
            $table->on_time = $train['on_time'];
            $table->cancelled = $train['cancelled'];
            $table->save();
        }


    }
}
