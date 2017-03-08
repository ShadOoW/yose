<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function calculate(Request $request)
    {
        $data = $_SERVER['QUERY_STRING'];
        $data = explode("&", $data);

        $results = [];
        foreach($data as $entry) {
            $args = explode("=", $entry);
            $value = $args[1];
            $results[] = $this->getPrimeData($value);                
        }

        return response()->json($results);
    }

    public function getPrimeData($value)
    {
        $num = intval($value);
        if (is_numeric($value) && strlen($value) < 7) {
        $primes = array();
            for ($candidate = 2; $num > 1; $candidate++) {
                for (; $num % $candidate == 0; $num /= $candidate) {
                    $primes[] = $candidate;
                }
            }
            return ['number' => intval($value), 'decomposition' => $primes];
        } else {
            if (strlen($value) < 7) {
                return ['number' => $value, 'error' => 'not a number'];
            } else {
                return ['number' => $value, 'error' => 'too big number (>1e6)'];
            }
        }
    }
}
