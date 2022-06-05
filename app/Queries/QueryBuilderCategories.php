<?php

declare(strict_types=1);

namespace App\Queries;

use App\Models\Category;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Contracts\Database\Eloquent\Builder;
use phpDocumentor\Reflection\Types\Collection;

class QueryBuilderCategories implements QueryBuilder
{

    public function getBuilder(): Builder
    {
        return Category::query();
    }

    public function getCategories()
    {
        return Category::select(['id', 'title', 'description', 'created_at'])->paginate(10);
    }

    public function getCategoryById(int $id)
    {
        return Category::join('news', 'categories.id', '=' , 'news.categories_id')
            ->select(['news.id', 'news.title as news_title', 'categories.title as cat_title', 'news.description', 'categories.id as cat_id'])
            ->where('categories.id', '=', $id)
            ->paginate(10);
    }
}
