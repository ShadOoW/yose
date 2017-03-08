<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function calculate(Request $request)
    {
        //$num = intval($request["number"]);
        $numbers = explode("&", $_SERVER['QUERY_STRING']);
        $result = [];
        foreach ($numbers as $number) {
            $numberInt = is_numeric(substr($number, 7,strlen($number))) ? intval(substr($number, 7,strlen($number))) : false;
            if ($numberInt) {
                $primes = array();
                for ($candidate = 2; $numberInt > 1; $candidate++) {
                    for (; $numberInt % $candidate == 0; $numberInt /= $candidate) {
                        $primes[] = $candidate;
                    }
                }

                $result[] = array('number' => intval($request["number"]), 'decomposition' => $primes);

            } else {
                if (strlen($request["number"]) < 7) {

                    $result[] = array('number' => $request["number"], 'error' => 'not a number');
                } else {
                    $result[] = array('number' => $request["number"], 'error' => 'too big number (>1e6)');
                }
            }
        }

        return response()
        ->json($result);

    }
}
