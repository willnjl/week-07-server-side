<?php

namespace Tests\Unit;

use Tests\TestCase;

class requestTest extends TestCase
{

    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test404()
    {
        $response = $this->get('/blah');

        $response->assertStatus(404);
    }
}
