<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    function getRouteKeyName() {
        return "book_name";
    }
}
