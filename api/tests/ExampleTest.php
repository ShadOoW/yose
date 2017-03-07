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

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testPrimeFactorDecomposition()
    {
        $response = $this->get('/primeFactors?number=300');

        $response->assertJson([
            "number" => "geek", "decomposition" => [ 2, 2, 3, 5, 5 ]
        ]);
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testPrimeFactorBigNumberGuard()
    {
        $response = $this->get('/primeFactors?number=10000000');

        $response->assertJson([
            "number" => "geek", "error" => "too big number (>1e6)"
        ]);
    }



}
