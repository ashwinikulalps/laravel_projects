<?php

namespace App\Http\Requests;

class RoleRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $id = $this->role ? ',' . $this->role->employee_id : '';

        return $rules = [
            'role_name' => 'bail|required|max:255',
            'designation' => 'bail|required|max:255',
            
        ];
    }
}
