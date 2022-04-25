<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Category;
use App\Models\Post;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $last_post = Post::all()->last();
        $all_posts = Post::with('category')->latest()->get();
        $categories = Category::all();
        return view('CustomerViews.index', compact('all_posts', 'last_post', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('AdminViews.createPost', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        $img = $request->post_image->store('posts_imgs');

        Post::create([
            'post_title' => $request->post_title,
            'post_content' => $request->post_content,
            'post_img_path' => $img,
            'post_source' => $request->post_source,
            // 'created_at' => Date::getLocale(),
            // 'updated_at' => Date::getLocale(),
            'category_id' => $request->post_categorie
        ]);

        return redirect()->route('create.post')->with('alert', 'Post créer avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $post = Post::where('id',$post)->get();
        // $post_details = Post::all()->where('id', $post)->toJson();
        // print_r($post_details);
        // return view('CustomerViews.article', compact('post'));
        return $post;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
