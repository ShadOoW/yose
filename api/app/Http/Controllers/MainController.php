<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;

class MainController extends Controller
{

    public function calculate(Request $request)
    {
        $number = $request->input('number');

        Log::info('******************');
        Log::info(json_decode($request));
        //
    }

    //
}
