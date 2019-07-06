<?php

namespace App\Http\Controllers;

use App\Library\CourseConvertor\XMLCurrencyConvertor;
use Illuminate\Http\Request;
use App\Library\CourseConvertor\JsonCurrencyConvertor;

class CourseController extends Controller
{
    public function index(){

        $convertors = array(
            new JsonCurrencyConvertor('https://www.cbr-xml-daily.ru/daily_json.js'),
            new XMLCurrencyConvertor('https://www.ecb.europa.eu/stats/eurofxref/eurofxref-daily.xml'),
        );

        foreach($convertors as $convertor){
            if($course = $convertor->get()){
                return response()->json([ 'course' => $course->convert()]);
            }
        }

        return response()->json([ 'course' => 'none' ]);

    }
}
