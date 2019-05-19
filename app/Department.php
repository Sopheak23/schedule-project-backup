<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = [
        'department_name',
        'faculty_id'
    ];

    public function professors()
    {
        return $this->belongsToMany('App\Professor', 'dept_prof', 'department_id', 'professor_id');
    }
}
