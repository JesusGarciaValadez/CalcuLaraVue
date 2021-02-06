<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ApiTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test try to retrieve a list of stored operations
     *
     * @return void
     */
    public function test_try_to_retrieve_a_list_of_stored_operations()
    {
        $operation = '2*2';
        $result = '4';
        $response = $this->postJson('/api/operations', [ 'operation' => $operation ]);

        $response
            ->assertStatus(201)
            ->assertJson([
                'operation' => $operation,
                'result' => $result,
                'updated_date' => today()->toJSON(),
            ]);

        $response = $this->getJson('/api/operations');

        $response
            ->assertStatus(200)
            ->assertJsonFragment([
                'id' => 1,
                'operation' => $operation,
                'result' => $result,
                'updated_date' => today()->toJSON(),
            ]);
    }

    /**
     * Test making an API request to store an operation
     *
     * @return void
     */
    public function test_making_an_api_request_to_store_an_operation()
    {
        $operation = '1+2';
        $result = '3';
        $response = $this->postJson('/api/operations', [ 'operation' => $operation ]);

        $response
            ->assertStatus(201)
            ->assertJson([
                'operation' => $operation,
                'result' => $result,
                'updated_date' => today()->toJSON(),
            ]);
    }

    /**
     * Test making an API request to store an operation with wrong operation
     *
     * @return void
     */
    public function test_making_an_api_request_to_store_an_operation_with_wrong_operation()
    {
        $operation = '12';
        $response = $this->postJson('/api/operations', [ 'operation' => $operation ]);

        $response
            ->assertStatus(400)
            ->assertJson([
                'error' => 'Operation not allowed',
                'exception' => 'There\'s not an operation to do.',
                'operation' => $operation,
            ]);
    }
}
