<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BmiController extends Controller
{
    //
    public function index(Request $request)
    {
        $result = [];
        $bmi = round($request->weight / (($request->height / 100) * ($request->height / 100)), 2);
        $result['bmi'] = $bmi;

        if ($bmi <= 18.5) {
            $result['status'] = 'Underweight';
            return $result;
        }

        if ($bmi > 18.5 && $bmi <= 24.9) {
            $result['status'] = 'Normal';
            return $result;
        }

        if ($bmi > 24.9 && $bmi <= 29.9) {
            $result['status'] = 'Overweight';
            return $result;
        }

        if ($bmi > 29.9) {
            $result['status'] = 'Obese';
            return $result;
        }
    }
}
