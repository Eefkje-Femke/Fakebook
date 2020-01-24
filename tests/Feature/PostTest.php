<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;
use App\Post;
use App\User;

class PostTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_search_post(){
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

    public function test_only_users_can_see_posts(){
        $response = $this->get('/posts')->assertRedirect('/login');
    }

    public function test_Post_can_be_added_through_form(){
        $post = factory(Post::class)->create([
            'title' => 'TestingTitle',
            'body' => 'TestingBody'
        ]);

        $result = Post::all();
        $this->assertEquals($result->count(), 1);
    }

    public function testpostUpload()
    {
        Storage::fake('cover_image');

        $file = UploadedFile::fake()->image('cover_image.jpg');

        $response = $this->json('POST', '/posts', [
            'cover_image' => $file,
        ]);

        // Assert the file was stored...
        Storage::disk('cover_image')->assertExists($file->hashName());

        // Assert a file does not exist...
        Storage::disk('cover_image')->assertMissing('missing.jpg');
    }
}