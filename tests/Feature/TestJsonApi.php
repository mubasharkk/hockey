<?php

namespace Tests\Feature;

use Tests\TestCase;

class TestJsonApi extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $headers = [
            'Authorization' => 'Bearer XXXXXXXXXXXXXXXX'
        ];
        $response = $this->json('GET', 'api/regions', ['code' => 'zFIcfM'], $headers);

        $response
            ->assertStatus(200)
            ->assertJson([
                'status' => true
            ]);
    }
}
