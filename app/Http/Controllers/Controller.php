<?php

namespace App\Http\Controllers;

use Faker\Factory;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

//    public function getCategory(){
//        $category = [];
//        $faker = Factory::create();
//        for ($i = 1; $i<7; ++$i){
//            $category[] = [
//                'id' => $i,
//                'category' => $faker->city
//            ];
//        }
//        return $category;
//    }
//
//    public function getNews($id = NULL){
//        $news = [];
//        $faker = Factory::create();
//        for ($i =0; $i<100; ++$i){
//            $news[] = [
//                'id' => $i,
//                'category_id' => rand(1,5),
//                'name' => $faker->jobTitle,
//                'text' => $faker->text(300),
//                'full_text' => $faker->text(3000)
//            ];
//        }
//        if ($id != NULL){
//            return $news[$id];
//        }
//        return $news;
//    }
}
