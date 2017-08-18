<?php

namespace App\Http\Controllers;

use App\Post;
use App\Tag;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBlogPost;
use Illuminate\Support\Facades\Auth;
use App\Repositories\Posts;


class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct() {
        $this->middleware("auth")->only("create");
    }

    public function index(Posts $posts)
    {
//        dd($posts);
//    $posts = $posts->all();
        $posts = Post::latest()->filter(request(["month","year"]))->get();

//        $posts = Post::orderBy("created_at","desc")->get();
        return view("posts.index",compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("posts.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBlogPost $request)
    {
//        dd(request(["title","body"]));
//        $blog = new Post();
//        $blog->title = request("title");
//        $blog->body = request("body");
//        $blog->save();

//        Post::create($request->request);

//        Post::create(
//            [
//                "title" =>request("title"),
//                "body" =>request("body"),
//                "user_id" => auth()->id()
//            ]
//        );

        auth()->user()->publish(new Post(request(["title","body"])));

        return redirect("/posts");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view("posts.show",compact("post"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
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
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }

    public function tags(Tag $tag = null){
        return $tag->posts;
    }

    public function serviceContainer(){
        var_dump(app("App\Billing\Stripe"));
    }

}
