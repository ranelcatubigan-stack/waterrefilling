<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Maintenance;
use App\Models\Employee;

class MaintenanceController extends Controller
{
    public function maintenanceindex(){

    $maintenances = Maintenance::all();
    $employees = Employee::all();

    return view('maintenances.maintenancesindex',['mains' => $maintenances, 'emps' => $employees
    ]);

    }

    public function maintenancestore(Request $request){

    Maintenance::create([

    'employee_id' => $request -> employee_id,
    'equipment_name' => $request -> m_equipment_name,
    'maintenance_type' => $request -> m_maintenance_type,
    'start_date' => $request -> m_start_date,
    'completion_date' => $request -> m_completion_date,
    'cost' => $request -> m_cost,
    'status' => $request -> m_status

    ]);
    return redirect('/maintenances');
    }

    public function maintenanceedit($id){

    $maintenance = Maintenance::findOrFail($id);
    $employee = Employee::all();

    return view('maintenances.maintenancesedit', ['main' => $maintenance,
    'emp' => $employee]);

    }

    public function maintenanceupdate(Request $request, $id){

    $maintenance = Maintenance::findOrFail($id);

    $maintenance -> update([

    'employee_id' => $request -> employee_id,
    'equipment_name' => $request -> m_equipment_name,
    'maintenance_type' => $request -> m_maintenance_type,
    'start_date' => $request -> m_start_date,
    'completion_date' => $request -> m_completion_date,
    'cost' => $request -> m_cost,
    'status' => $request -> m_status

    ]);

    return redirect('/maintenances');
    }

    public function maintenancedestroy($id){

    $maintenance = Maintenance::findOrFail($id);

    $maintenance -> delete();

    return redirect('/maintenances');

    }



}
