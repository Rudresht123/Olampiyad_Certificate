<?php

namespace App\Http\Controllers\GlobalSetting\School;

use App\Http\Controllers\Controller;
use App\Models\GlobalSetting\CourseModel;
use App\Models\GlobalSetting\SchoolInformation;
use Illuminate\Http\Request;
use App\Repositories\MasterAdmin\CommanRepository;
use App\Http\Requests\GlobalSetting\SchoolMapWithCourseRequest;
use App\Models\GlobalSetting\SchoolMapWithCourseModel;

class MapSchoolWithCourse extends Controller
{
    public function index()
    {
        $courses=(new CommanRepository())->getAllCourse();
        $schools=(new CommanRepository())->getAllSchool();
        return view('admin_panel.module.globalsetting.Masteradmin.Add.school_map_with_course',compact(['courses','schools']));
    }
    public function getClassData($id)
    {
        $courses=(new CommanRepository())->getAllCourse();
        $schools=(new CommanRepository())->getAllSchool();
        $couresedata=(new CommanRepository())->schoolWithCourse($id);
        return view('admin_panel.module.globalsetting.Masteradmin.Add.school_map_with_course',compact(['courses','schools','couresedata']));

    }
    public function store(SchoolMapWithCourseRequest $request){

        SchoolMapWithCourseModel::where('school_id', $request->school_id)->forceDelete();
        foreach($request->course_id as $course){
            $data=[
                'school_id'=>$request->school_id,
                'course_id'=>$course
            ];
            SchoolMapWithCourseModel::create($data);
        }
        return back()->with(['success'=>'Record Seaved Successfully Done']);
    }
}
