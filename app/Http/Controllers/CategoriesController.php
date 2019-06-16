<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Redirect;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('category.index', compact('post','categories'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('category.create' , compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
        ]);

        $requestData = $request->all();
        $updating = Category::create($requestData);

        if (!$updating) {
            return Redirect::to(route('category.index'))->with('message-danger', __('Category can\'t be created'));
        }
        return Redirect::to(route('category.index'))->with('message-success', __('Category created Successfully'));
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
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        $categories_list = Category::pluck('title', 'id')->toArray();
        $categories = Category::all();
        return view('category.edit', compact('category','categories','categories_list'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
        ]);

        $requestData = $request->all();
        $updating = Category::findOrFail($id);
        $updating->update($requestData);

        if (!$updating) {
            return Redirect::to(route('category.index'))->with('message-danger', __('Category can\'t be updated'));
        }

        return Redirect::to(route('category.index'))->with('message-success', __('Category updated Successfully'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categories = Category::find($id);
        
        if ($categories->delete()) {
            return Redirect::to(route('category.index'))->with('message-success', __('Category Deleted Successfully'));
        }
        return Redirect::to(route('category.index'))->with('message-danger', __('Category can\'t be deleted'));
    }
}
