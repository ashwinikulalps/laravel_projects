<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    //
    use SoftDeletes;

    protected $fillable = [
        'task_name', 'task_description', 'task_assigned_to', 'task_assigned_from','employee_id'
    ];

      /**
     * Many to Many relation
     *
     * @return \Illuminate\Database\Eloquent\Relations\belongsToMany
     */
    public function employees()
    {
        return $this->belongsToMany(Employee::class);
    }
}
