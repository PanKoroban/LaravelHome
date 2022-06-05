<?php
declare(strict_types=1);

namespace App\Queries;

use App\Models\News;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Pagination\LengthAwarePaginator;

class QueryBuilderNews implements QueryBuilder
{

    public function getBuilder(): Builder
    {
        return News::query();
    }

    public function getNews()
    {
        return News::join('categories', 'categories.id', '=', 'news.categories_id')
        ->select(['news.id as id', 'news.categories_id as categories_id', 'news.title as title', 'news.author', 'news.description as description', 'news.status', 'categories.title as cat_title'])
            ->paginate(9);
    }

    public function getNewsById(int $id)
    {
        return News::join('categories', 'categories.id', '=' , 'news.categories_id')
            ->select(['news.id as id', 'news.title as title', 'categories.title as cat_title', 'news.description', 'categories.id as cat_id'])
            ->where('news.id', '=', $id)
            ->get();
    }
}
