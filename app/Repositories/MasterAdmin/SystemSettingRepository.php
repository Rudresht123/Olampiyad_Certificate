<?php

namespace App\Repositories\MasterAdmin;

use App\Models\GlobalSetting\CourseModel;
use App\Models\GlobalSetting\SchoolInformation;
use App\Models\SystemSetting\EmailConfigurationModel;
use App\Repositories\RepositoryContract;

class SystemSettingRepository extends RepositoryContract
{
    public function getEmailsTemplate(){
        return EmailConfigurationModel::query()->record()->get();
    }
    public function getAllCourse(){
        return CourseModel::where('is_active','yes')->get();
    }
}

