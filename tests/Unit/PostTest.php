<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class PostTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function Authorized_users_can_see_posts()
    {
        $response = $this->get('posts')->assertRedirect('/home');
    }
}
