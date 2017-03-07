<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function calculate(Request $request)
    {
        $num = intval($request["number"]);
        if (is_numeric($request["number"]) && strlen($request["number"]) < 7) {
            $primes = array();
            for ($candidate = 2; $num > 1; $candidate++) {
                for (; $num % $candidate == 0; $num /= $candidate) {
                    $primes[] = $candidate;
                }
            }
            return response()
                ->json(['number' => intval($request["number"]), 'decomposition' => $primes]);

        } else {
            if (strlen($request["number"]) < 7) {
                return response()
                    ->json(['number' => $request["number"], 'error' => 'not a number']);
            } else {
                return response()
                    ->json(['number' => $request["number"], 'error' => 'too big number (>1e6)']);
            }
        }

    }
}
