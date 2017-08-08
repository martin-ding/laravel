<?php

namespace App;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ["post_id","body"];

    public function post(){
        return $this->belongsTo(Post::class);
    }

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

}
