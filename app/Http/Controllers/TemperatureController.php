<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemperatureController extends Controller
{
    const TEMP = [1, 4, 5, 6, 8, 88, -9, -17];

    /**
     * Show a list of users
     * @return \Illuminate\View\View
     */
    public function show()
    {
        $tempInput = self::TEMP;
        return view('frontend.temp', compact('tempInput'));
    }

    public function calc(Request $request)
    {
        $temp = $request->input('name');
//        if ($temp == null) {
//            return redirect()->route('temp');
//        }

        return view('frontend.result-temp',  ['closestTemp' => $this->getClosest($temp, self::TEMP), 'tempInput' => self::TEMP]);
    }

    // to logic model pls
    private function getClosest($search, $arr)
    {
        $closest = null;
        foreach ($arr as $item) {
            if ($closest === null || abs($search - $closest) > abs($item - $search)) {
                $closest = $item;
            }
        }
        return $closest;
    }
}