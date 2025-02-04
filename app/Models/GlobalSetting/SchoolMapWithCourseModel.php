<?php

namespace App\Models\GlobalSetting;

use App\Models\Record;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SchoolMapWithCourseModel extends Record
{
    use SoftDeletes;
    protected $table="school_map_with_course";
    protected $fillable=[
        'school_id',
        'course_id',
        'user_id',
    ];


    public function courses(){
        return $this->belongsTo(CourseModel::class,'course_id','id');
    }
}
