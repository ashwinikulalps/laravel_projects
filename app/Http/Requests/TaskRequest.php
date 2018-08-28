<?php

namespace App\Http\Requests;

class TaskRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $id = $this->task ? ',' . $this->task->id : '';
       
        return $rules = [
            'task_name' => 'bail|required|max:255',
            'task_description' => 'bail|required|max:255',
            'task_assigned_to' => 'bail|required|max:255',
            'task_assigned_from' => 'bail|required|max:255',
            'employee_id' => 'bail|required',
        ];
    }
}
