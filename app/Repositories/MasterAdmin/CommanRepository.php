<?php

namespace App\Repositories\MasterAdmin;

use App\Models\GlobalSetting\CorrectiveAdviceCategoryModel;
use App\Models\GlobalSetting\CourseModel;
use App\Models\GlobalSetting\SchoolInformation;
use App\Repositories\RepositoryContract;

class CommanRepository extends RepositoryContract
{
    public function getAllSchools(){
        return SchoolInformation::query()->record()->get();
    }
    public function getAllSchool(){
        return SchoolInformation::where('is_active','yes')->get();
    }
    public function getAllCourses(){
        return CourseModel::query()->record()->get();
    }
    public function getAllCourse(){
        return CourseModel::where('is_active','yes')->get();
    }
    public function getAllCategoryes(){
        return CorrectiveAdviceCategoryModel::query()->record()->get();
    }
}

