<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{

    public function index(Tag $tag = null){
        $posts = $tag->posts;
        return view("posts.index",compact("posts"));
    }
}
