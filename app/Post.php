<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;


class Post extends Model
{
    protected $fillable = ["title","body","user_id"];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    //cool way
    public function addComment($body){
        $this->comments()->create(compact("body"));
//        Comment::create([
//            "body" => $body,
//            "post_id" => $this->id,
//        ]);

    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function scopeFilter($query,$filters){
        if($month = $filters["month"]){
            $query->whereMonth("created_at",$month);
        }
        if($year = $filters["year"]){
            $query->whereYear("created_at",$year);
        }
        return $query;
    }

    public static function getArchives(){
        $archives = static::selectRaw('YEAR(`created_at`) as `year`,	MONTH(`created_at`) as `month`,	count(*) as`published`')
            ->groupBy("year","month")
            ->orderByRaw('min(`created_at`)')
            ->get();
        return $archives;
    }

    public function tags() {
        return $this->belongsToMany(Tag::class);
    }
}
