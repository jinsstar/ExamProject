<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\employee;

class EmployeeController extends Controller
{
    public function get()
    {
        $cars = array("Volvo", "BMW", "Toyota");
        return $cars;
        // $data = employee::get();
        // return $data;
        // dd(employee::get());
    }
    public function test()
    {
        return "water123";
    }
    public function addData(Request $request)
    {
       return $request;
    }
}
