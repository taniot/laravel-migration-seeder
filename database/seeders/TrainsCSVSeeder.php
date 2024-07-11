<?php

namespace Database\Seeders;

use App\Functions\Helpers;
use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsCSVSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $file = __DIR__ . '/csv/trains.csv';

        $data = Helpers::getCSV($file);

        foreach ($data as $train_data) {
            $train = new Train();
            foreach ($train_data as $key => $value) {
                $train[$key] = $value;
            }
            $train->save();
        }
    }
}
