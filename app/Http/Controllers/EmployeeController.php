<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee; 
class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', ['items' => $employees]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name123' => 'required',
            'middle_name123' => 'nullable',
            'last_name123' => 'required',
            'username123' => 'required|unique:employees,username',
            'password123' => 'required|min:8',
            'role123' => ['required', 'in:user,staff'],
        ]);

        Employee::create([
            'first_name' => $request->first_name123,
            'middle_name' => $request->middle_name123,
            'last_name' => $request->last_name123,
            'username' => $request->username123,
            'password' => bcrypt($request->password123),
            'role' => $request->role123,
        ]);

        return redirect('/employees')->with('success', 'Employee added successfully!');
    }

    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        return view('employees.edit', ['item' => $employee]);
    }

    public function update(Request $request, $id)
    {
        $employee = Employee::findOrFail($id);

        $request->validate([
            'first_name123' => 'required',
            'middle_name123' => 'nullable',
            'last_name123' => 'required',
            'username123' => 'required|unique:employees,username,' . $id,
            'password123' => 'nullable|min:8',
            'role123' => ['required', 'in:user,staff'],
        ]);

        $data = [
            'first_name' => $request->first_name123,
            'middle_name' => $request->middle_name123,
            'last_name' => $request->last_name123,
            'username' => $request->username123,
            'role' => $request->role123,
        ];

        if ($request->filled('password123')) {
            $data['password'] = bcrypt($request->password123);
        }

        $employee->update($data);

        return redirect('/employees')->with('success', 'Employee updated!');
    }

    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();

        return redirect('/employees')->with('success', 'Employee deleted!');
    }
}