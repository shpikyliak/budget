<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public function budgets()
    {
        return $this->hasMany(Budget::class);
    }

    public function messages()
    {
        return $this->hasMany(Message::class, 'to_department_id');
    }

    public function newMessages()
    {
        $messages = $this->messages->where('is_done', 0);
        return $messages;
    }

    public function departments()
    {
        return $this->hasMany(Department::class, 'related_to');
    }

    public function related()
    {
        return $this->belongsTo(Department::class, 'related_to');
    }

    public function allBudgets()
    {
        $colletion[] = $this->budgets;
        $departments = $this->departments;
        foreach ($departments as $department) {
            $colletion[] = $department->budgets;
            if ($department->departments->isNotEmpty())
            {
                $relatedDepartments = $department->departments;
                foreach ($relatedDepartments as $relatedDepartment)
                {
                    $colletion[] = $relatedDepartment->budgets;
                }
            }

        }

        return collect($colletion);

    }

}
