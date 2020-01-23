<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class PageTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_search_text_index_page(){
        $response = $this->get('/');
        $response->assertSeeText('Project');
        $response->assertSeeText('Fakebook');
    }

    public function test_redirect_to_login(){
        $response = $this->get('/home');
        $response->assertRedirect('/login');
        $response->assertStatus(302);
    }

    public function test_unauthorized_user(){
        $response = $this->get('/posts');
        $this->assertGuest($guard = null);//not authorized
    }
}
