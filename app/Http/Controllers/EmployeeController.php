<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\User;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $mergeTable =  User::join('employees', 'users.id', '=', 'employees.user_id')
            ->paginate(10);

        return view('welcome', [
            'mergeTable' => $mergeTable
        ]);
    }

    public function list()
    {
        $employee = Employee::latest()->first()->paginate(10);
        return view('employees.list', [
            'employees' => $employee
        ]);
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Employee::create($input);
        return redirect('/employee');
    }

    // public function edit($id)
    // {
    //     $employee = Employee::find($id);
    //     return view('employees.edit')->with('employees', $employee);
    // }

    public function update(Request $request, $id)
    {
        $employee = Employee::find($id);
        $input = $request->all();
        $employee->update($input);
        return redirect('/employee');
    }

    public function destroy(Employee $id)
    {
        $id->delete();
        return redirect('/employee');
    }
}
