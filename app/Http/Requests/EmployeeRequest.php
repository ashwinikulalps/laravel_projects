<?php

namespace App\Http\Requests;

class EmployeeRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $id = $this->employee ? ',' . $this->employee->id : '';

        return $rules = [
            'employee_name' => 'bail|required|max:255',
            'designation' => 'bail|required|max:255' . $id,
        ];
    }
}
