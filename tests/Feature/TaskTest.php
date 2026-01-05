<?php

namespace Tests\Feature;

use Tests\TestCase;

class TaskTest extends TestCase
{
    public function test_api_is_accessible()
    {
        $response = $this->get('/api/tasks');
        $response->assertStatus(200);
    }
}
