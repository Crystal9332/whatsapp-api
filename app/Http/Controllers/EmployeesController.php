<?php

namespace App\Http\Controllers;

class EmployeesController extends Controller
{
    //Show Employee page
    public function employeeShow()
    {
        return view('employee');
    }
}