<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use Redirect;
use Illuminate\Support\Facades\Route;
class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin.index', compact('posts'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $categories = Category::pluck('title', 'id')->toArray();
        return view('admin.create' , compact('categories'));
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
            'description' => 'required',
            'category_id' => 'required',
        ]);

        $requestData = $request->all();
        $posting = Post::create($requestData);

        if (!$posting) {
            return Redirect::to(route('admin.index'))->with('message-danger', __('Post can\'t be created'));
        }

        return Redirect::to(route('admin.index'))->with('message-success', __('Post created Successfully'));

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
        $post = Post::findOrFail($id);
        $categories = Category::pluck('title', 'id')->toArray();
        return view('admin.edit', compact('post','categories'));
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
            'description' => 'required',
            'category_id' => 'required',
        ]);

        $requestData = $request->all();
        $posting = Post::findOrFail($id);
        $posting->update($requestData);

        if (!$posting) {
            return Redirect::to(route('admin.index'))->with('message-danger', __('Post can\'t be updated'));
        }

        return Redirect::to(route('admin.index'))->with('message-success', __('Post updated Successfully'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $post = Post::find($id);
        
        if ($post->delete()) {
            return Redirect::to(route('admin.index'))->with('message-success', __('Post Deleted Successfully'));
        }
        return Redirect::to(route('admin.index'))->with('message-danger', __('Post can\'t be deleted'));
    }
}
