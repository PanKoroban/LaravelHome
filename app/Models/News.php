<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';

    public function getNews(){
        return
            DB::table($this->table)
                ->join('categories', 'categories_id', '=', 'categories.id')
                ->select(['news.id', 'categories.title as cat_title', 'news.title', 'news.author', 'news.description'])
                ->get();
    }

    public function getOneNews(int $id){
        return DB::table($this->table)->select(['id', 'title', 'categories_id', 'description'])->find($id);
    }
}
