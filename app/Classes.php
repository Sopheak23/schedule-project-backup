<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    public function subjects()
    {
        return $this->belongsTo('App\Subject');
    }

    public function prof_dept()
    {
        return $this->belongsTo('prof_dept');
    }

    public function days()
    {
        return $this->belongsTo('days');
    }

    public function times()
    {
        return $this->belongsTo('times', 'start_time', 'end_time');
    }
}
