<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Illuminate\Support\Facades\Route;
class AuthorController extends Controller
{
    function index(App\Author $author){
        foreach($this->getAuthors() as $author){
            var_dump($author->email);
        }
    }

    function getAllAuthors(){
        foreach(App\Author::all() as $author){
            var_dump($author->name);
        }
    }

    function getAuthors(){
        return App\Author::popular()->get();
//        App\Author::where("name","xiaoming")->orderBy('emial');
    }

    function __invoke($id) {
        // TODO: Implement __invoke() method.
        var_dump(App\Author::find(1));
    }
}
