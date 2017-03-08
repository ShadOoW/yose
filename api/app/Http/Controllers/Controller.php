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
                if (strlen(substr($number, 7,strlen($number))) < 7) {

                    $primes = array();
                    for ($candidate = 2; $numberInt > 1; $candidate++) {
                        for (; $numberInt % $candidate == 0; $numberInt /= $candidate) {
                            $primes[] = $candidate;
                        }
                    }


                    $result[] = array('number' => intval(substr($number, 7, strlen($number))), 'decomposition' => $primes);
                }
                else {
                    $result[] = array('number' => substr($number, 7,strlen($number)), 'error' => 'too big number (>1e6)');

                }
            } else {
                $result[] = array('number' => substr($number, 7,strlen($number)), 'error' => 'not a number');
            }
        }

        if(count($result) > 1)
        return response()
        ->json(json_decode(json_encode($result), FALSE));
        else {
            return response()
                ->json(current($result));
        }

    }
}
