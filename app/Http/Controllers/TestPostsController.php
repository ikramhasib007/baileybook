<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TestPost;
use App\Category;

class TestPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = TestPost::all();
        $allposts = [];
        foreach($posts as $post){
            $post->categoryName = Category::find($post->category_id)->name;
            $allposts[] =$post;
        }
        return response($allposts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new TestPost;
        $request->validate([
            'title' => 'required|unique:test_posts|max:255',
            'category_id' => 'required|integer',
            'body' => 'required'
        ]);
        $post->title = $request->title;
        $post->category_id = $request->category_id;
        $post->slug = str_slug($request->title);
        $post->body = $request->body;
        
        $post->save();
        $post->categoryName = Category::find($post->category_id)->name;
        return response($post);
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
        //
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
        $request->validate([
            'title' => 'required|max:255|unique:test_posts,title,'.$id.'id',
            'category_id' => 'required|integer',
            'body' => 'required'
        ]);
            
        $post = TestPost::find($id);
        
        $post->title = $request->title;
        $post->category_id = $request->category_id;
        $post->slug = str_slug($request->title);
        $post->body = $request->body;
        
        $post->save();
        $post->categoryName = Category::find($post->category_id)->name;
        return $post;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = TestPost::find($id);
        $post->delete();
        return $post;
    }
}
