<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;
use App\Post;

class PostTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testSearchPost()
    {
        factory(Post::class, 5)->create();
        $first = factory(Post::class)->create(['title' => 'Datitle1Das']);

        $result = Post::all();
        $this->assertEquals($result->count(), 6);

        $result = Post::postSearch("title1");
        //Er moeten 1 POST in de lijst zitten
        $this->assertEquals($result->count(), 1);
        //De eerste is bekend
        $this->assertEquals($result->first()->id, $first->id);

        $this->assertTrue(true);
    }
    
    public function testLink(){
        $this->visit('/home')
        ->click('Create Post')
        ->seePageIs('/post');
    }
}