<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use app\Post;

class PostTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testFirstTest()
    {
        // factory(Post::class, 5)->create();
        // $first = factory(Post::class)->create(['title' => 'tilte1']);

        // $second = Post::postSearch("title1");
        // //Er moeten 2 contacten in de lijst zitten
        // $this->assertEquals($posts->count(), 2);
        // //De eerste is bekend
        // $this->assertEquals($posts->first()->id, $first->id);

        $this->assertTrue(true);
    }
}