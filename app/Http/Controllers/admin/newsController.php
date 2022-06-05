<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Queries\QueryBuilderCategories;
use App\Queries\QueryBuilderNews;
use Illuminate\Http\Request;
use App\Models\News;


class newsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(QueryBuilderNews $news)
    {
        return view('Admin.index', ['news'=> $news->getNews()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(QueryBuilderCategories $category)
    {
        return view('Admin.newsCreate', ['category' =>$category->getCategories()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->only(['categories_id', 'title', 'author', 'description', 'status']);
        $news = new News($validated);
        if($news->save()){
            return redirect()->route('admin.news.index')->with('success', 'Запись добавлена');
        }

        return back()->with('error', 'Ошибка добавления');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news, QueryBuilderCategories $category)
    {
        return view('Admin.newsEdit', ['news' => $news, 'category' => $category->getCategories()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        $validated = $request->only(['categories_id', 'title', 'author', 'description', 'status']);
        $news = new News($validated);
        if($news->save()){
            return redirect()->route('admin.news.index')->with('success', 'Запись добавлена');
        }

        return back()->with('error', 'Ошибка добавления');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
