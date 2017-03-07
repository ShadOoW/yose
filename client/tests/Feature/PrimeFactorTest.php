<?php

namespace Tests\Feature;

use Tests\TestCase;

class PrimeFactorTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testPrimeFactor()
    {
        $response = $this->get('/primeFactors?number=hello');

        $response->assertJson([
            "number" => "hello",
            "error"  => "not a number"
        ]);
    }
}