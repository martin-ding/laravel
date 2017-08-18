<?php

namespace Tests\Unit;

use App\Post;
use Carbon\Carbon;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    use  DatabaseTransactions; //执行之后rollback
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
//        $first = factory(Post::class)->create();
//        $second = factory(Post::class)->create([
//            "created_at" => Carbon::now()->subMonth(2),
//        ]);
//
//        $posts = Post::getArchives();
////        $this->assertTrue(true);
////        dd($posts);
////        $this->assertCount(2,$posts);
//        $this->assertEquals([
//            [
//                "year"      => $second->created_at->format("Y"),
//                "month"     => (int)$second->created_at->format("m"),
//                "published" => 2,
//            ], [
//                "year"      => $first->created_at->format("Y"),
//                "month"     => (int)$first->created_at->format("m"),
//                "published" => 2,
//        ]],$posts->toArray());
    }
}
