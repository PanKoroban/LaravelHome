<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert($this->getData());
    }

    private function getData(): array
    {
        $data =[];
        $faker = Factory::create();
        for($i=1;$i<6;$i++){
            for ($j=0;$j<10;$j++){
                $data[]=[
                    'categories_id' => $i,
                    'title' => $faker->jobTitle,
                    'description' => $faker->text(550)
                ];
            }
        }
        return $data;
    }
}
