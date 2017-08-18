<?php

namespace Tests\Feature;

use App\Box;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class BoxTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
//    public function testExample()
//    {
//        $box = new Box(['cat', 'toy', 'torch']);
//
//        $this->assertTrue($box->has('toy'));
////        $this->assertTrue($box->has('ball'));
//    }
//
//    public function testOne(){
//        $box = new Box(['torch']);
//
//        $this->assertEquals('torch', $box->takeOne());
//
//        // Null, now the box is empty
//        $this->assertEquals("as",$box->takeOne());
//    }

    public function testTwo(){
        $this->visit("/posts")->see("The Bootstrap Blog");
    }
}
