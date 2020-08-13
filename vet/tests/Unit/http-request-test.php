<?php

namespace Tests\Unit;

use Tests\TestCase;

class http_request_test extends TestCase
{

    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
