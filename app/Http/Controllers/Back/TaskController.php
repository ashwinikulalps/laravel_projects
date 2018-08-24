<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Task;
use App\Models\Employee;
use App\Http\Requests\TaskRequest;

class TaskController extends Controller
{
     /**
     * Display a listing of the Task.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $tasks = Task::get();

        // return $tasks;

        return view('back.tasks.index', compact ('tasks'));
    }

     /**
     * Show the form for creating a new Task.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        $employees = Employee::all()->pluck('employee_name', 'id');
        return view('back.tasks.create', compact('employees'));
    }

     /**
     * Store a newly created tasks in storage.
     *
     * @param  \App\Http\Requests\TaskRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TaskRequest $request)
    { 
        return $request;
        Task::create($request->all());
        return redirect(route('tasks.index'))->with('task-ok', __('The Task has been successfully created'));
    }


    /**
     * Show the form for editing the specified task.
     *
     * @param  \App\Models\task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        // dd($task);
        return view('back.tasks.edit', compact ('task'));
    }

    /**
     * Update the specified task in storage.
     *
     * @param  \App\Http\Requests\TaskRequest  $request
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(TaskRequest $request, Task $task)
    {
        
        $task->update($request->all());

        return redirect(route('tasks.index'))->with('task-ok', __('The Tasks has been successfully updated'));
    }

    /**
     * Remove the specified Task from storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        $tasks->delete();

        return response ()->json ();
    }
    
}
