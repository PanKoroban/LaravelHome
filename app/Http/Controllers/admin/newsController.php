<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\news\StoreRequest;
use App\Http\Requests\news\UpdateRequest;
use App\Models\News;
use App\Queries\QueryBuilderCategories;
use App\Queries\QueryBuilderNews;


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
    public function store(StoreRequest $request)
    {
        $validated = $request->validated();
        $news = new News($validated);
        if($news->save()){
            return redirect()->route('admin.news.index')->with('success', __('message.admin.news.create.success'));
        }

        return back()->with('error', __('message.admin.news.create.fail'));
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
    public function update(UpdateRequest $request, News $news)
    {
        $validated = $request->validated();
        $news = $news->fill($validated);
        if($news->save()){
            return redirect()->route('admin.news.index')->with('success', __('message.admin.news.update.success'));
        }

        return back()->with('error', __('message.admin.news.update.fail'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        try {
            $news->delete();
            return response()->json('ok');
        } catch(\Exception $e){
            \Log::error($e->getMessage());
            return response()->json('error', 400);
        }

    }
}
