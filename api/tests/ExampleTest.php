<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class ControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testPrimeFactorNotANumber()
    {
        $response = $this->get('/primeFactors?number=geek');

        $response->assertJson([
            "number" => "geek", "error" => "not a number"
        ]);
    }

    public function testPrimeFactorDecomposition()
    {
        $response = $this->get('/primeFactors?number=300');

        $response->assertJson([
            "number" => 300, "decomposition" => [ 2, 2, 3, 5, 5 ]
        ]);
    }

    public function testPrimeFactorBigNumberGuard()
    {
        $response = $this->get('/primeFactors?number=10000000');

        $response->assertJson([
            "number" => 10000000, "error" => "too big number (>1e6)"
        ]);
    }

    public function testPrimeFactorMultipleEntries()
    {
        $response = $this->get('/primeFactors?number=300&number=120&number=hello');

        $response->assertJson([
            [
                "number" => 300,
                "decomposition" => [ 2, 2, 3, 5, 5 ]
            ],
            [
                "number" => 120,
                "decomposition" => [ 2, 2, 2, 3, 5 ]
            ],
            [
                "number" => "hello",
                "decomposition" => "not a number"
            ]
        ]);
    }



}
