<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function calculate(Request $request)
    {
        $temp = 0;
        $result = [];
        $num = intval($request["number"]);

        while ($temp < $num) {
            $result[] = 2;
            $temp = pow(2, count($result));
        }

        if (pow(2, count($result) == $num)) {
            return response()
                ->json(['number' => intval($request["number"]), 'decomposition' => $result]);
        } else {
            return response()
                ->json(['number' => intval($request["number"]), 'decomposition' => 'Not a power of 2']);
        }
    }
}
