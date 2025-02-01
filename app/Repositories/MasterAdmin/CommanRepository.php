<?php

namespace App\Repositories\MasterAdmin;

use App\Models\GlobalSetting\CorrectiveAdviceCategoryModel;
use App\Models\GlobalSetting\CorrectiveAdviceModel;
use App\Models\GlobalSetting\CourseModel;
use App\Models\GlobalSetting\SchoolInformation;
use App\Repositories\RepositoryContract;

class CommanRepository extends RepositoryContract
{
    public function getAllSchools(){
        return SchoolInformation::query()->record()->get();
    }
    public function getAllSchool(){
        return SchoolInformation::where('is_active','yes')->record()->get();
    }
    public function getAllCourses(){
        return CourseModel::query()->record()->get();
    }
    public function getAllCourse(){
        return CourseModel::where('is_active','yes')->record()->get();
    }
    public function getAllCategoryes(){
        return CorrectiveAdviceCategoryModel::query()->record()->get();
    }
    public function getAllCategorye(){
        return CorrectiveAdviceCategoryModel::where('is_active','yes')->record()->get();
    }
    public function getAllCorrectiveAdvices(){
        return CorrectiveAdviceModel::query()->record()->get();
    }
    public function getAllCorrectiveAdvice(){
        return CorrectiveAdviceModel::where('is_active','yes')->record()->get();
    }
}

