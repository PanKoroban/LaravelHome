<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\category\StoreCategoriesRequest;
use App\Http\Requests\category\UpdateCategoriesRequest;
use App\Models\Category;
use App\Models\News;
use App\Queries\QueryBuilderCategories;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(QueryBuilderCategories $categories)
    {
        return view('Admin.category', ['category'=> $categories->getCategories()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.categoryCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoriesRequest $request)
    {
        $validated = $request->validated();
        $category = new Category($validated);
        if($category->save()){
            return redirect()->route('admin.category.index')->with('success', __('message.admin.category.create.success'));
        }

        return back()->with('error', __('message.admin.category.create.fail'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('Admin.categoryEdit', ['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoriesRequest $request, Category $category)
    {
        $validated = $request->validated();
        // первый метод сохранить
//        $category->title = $request->title;
//        $category->description = $request->description;
//        $category->save();

        // второй метод
        $category = $category->fill($validated);
        if($category->save()){
            return redirect()->route('admin.category.index')->with('success', __('message.admin.category.update.success'));
        }

        return back()->with('error', __('message.admin.category.update.fail'));


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        try {
            $category->delete();
            return response()->json('ok');
        } catch(\Exception $e){
            \Log::error($e->getMessage());
            return response()->json('error', 400);
        }

    }

}
