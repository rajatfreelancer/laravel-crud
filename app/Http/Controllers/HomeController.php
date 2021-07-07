<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('employee_data');
    }

    public function getJSON()
    {
        $file = file_get_contents(resource_path('views/employee_data.json'));
        $jsonData = json_decode($file, true);
        return $jsonData;
    }

}
