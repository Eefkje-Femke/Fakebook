<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class UserIdPostTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
        // $this->assertTrue(true);
    }
}

/*
    testen of de gemaakte post het juiste user_id heeft. 

    materiaal: {{Auth::user()->name}}
    User_id of post
    meest recente post
*/