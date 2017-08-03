<?php

namespace App;

use App\Scopes\AuthorScope;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
//    protected static function boot() {
//        parent::boot(); // TODO: Change the autogenerated stub
//        static::addGlobalScope(new AuthorScope());
//    }

    function scopePopular($query){
        return $query->where('name', '=', "xiaoming");
    }
}
