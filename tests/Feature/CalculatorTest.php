<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CalculatorTest extends TestCase
{
    /**
     * Test that calculator is accesible
     *
     * @return void
     */
    public function test_calculator_is_accesible()
    {
        $response = $this->get('/');

        $response->assertStatus(200)
            ->assertSee('Calculator')
            ->assertSee('Please, select the operation that you want to make.');
    }
}
