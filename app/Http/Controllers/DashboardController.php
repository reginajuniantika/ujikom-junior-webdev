<?php

namespace App\Http\Controllers;

use App\Models\employee;

class DashboardController extends Controller
{
    public function index()
    {
        $employees = Employee::get();
        $employeeCount = $employees->count();
        $employeeJatim = $employees->where('domisili', 'Jawa Timur')->count();
        $employeeJateng = $employees->where('domisili', 'Jawa Tengah')->count();
        $employeeJabar = $employees->where('domisili', 'Jawa Barat')->count();

        return view('dashboard', compact('employees', 'employeeCount', 'employeeJatim', 'employeeJateng', 'employeeJabar'));
    }
}
