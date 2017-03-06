<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function calculate(Request $request)
    {
        while (intval($request["number"]) %  2 == 0) {
            $sqrt = sqrt(intval($request["number"]));

            return response()
                ->json(['number' => intval($request["number"]), 'decomposition' => array_fill(0, $sqrt, 2)]);
        }
    }
}
