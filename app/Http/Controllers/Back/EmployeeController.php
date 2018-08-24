<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Role;
use App\Http\Requests\EmployeeRequest;

class EmployeeController extends Controller
{
     /**
     * Display a listing of the categories.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $employee = Employee::get();

        // return $employees;

        return view('back.employee.index', compact ('employee'));
    }

    /**
     * Show the form for creating a new Employee.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        $roles = Role::all()->pluck('role_name', 'id');
        return view('back.employee.create',compact ('roles'));
    }

     /**
     * Store a newly created employee in storage.
     *
     * @param  \App\Http\Requests\CategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployeeRequest $request)
    {
        Employee::create($request->all());

        return redirect(route('employees.index'))->with('category-ok', __('The Employee has been successfully created'));
    }


    /**
     * Show the form for editing the specified employee.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        return view('back.employee.edit', compact ('employee'));
    }

    /**
     * Update the specified employee in storage.
     *
     * @param  \App\Http\Requests\CategoryRequest  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(EmployeeRequest $request, Employee $employee)
    {
        $employee->update($request->all());

        return redirect(route('employees.index'))->with('category-ok', __('The employee has been successfully updated'));
    }

    /**
     * Remove the specified employee from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();

        return response ()->json ();
    }


}
