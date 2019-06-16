<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Post;
use App\Category;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Post::all();
        $categories = Category::all();
        return view('user.index', compact('post','categories'));  
    }

     /**
     *
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function category($category_id)
    {   
        if($category_id)
        {
            $post = Post::where('category_id',$category_id)->get();
            $categories = Category::all();
            return view('user.index', compact('post','categories'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $categories = Category::all();
        $post = Post::find($id);
        if (!$post) {
            return Redirect::back();
        }

        return view('user.show', compact('post','categories'));
    }

}
