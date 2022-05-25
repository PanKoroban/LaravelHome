<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    public function getCategories(){
        return DB::table($this->table)->select(['id', 'title'])->get();
    }

    public function getCategory(int $id){
        return DB::table($this->table)
            ->join('news', 'categories.id', '=' , 'news.categories_id')
            ->select(['news.id', 'news.title as news_title', 'categories.title as cat_title', 'news.description', 'categories.id as cat_id'])
            ->where('categories.id', '=', $id)
            ->get();
    }
}
