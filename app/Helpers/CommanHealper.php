<?php
use App\Models\GlobalSetting\SchoolInformation;
use App\Repositories\MasterAdmin\CommanRepository;

if (!function_exists('schoolCount')) {
    function schoolCount()
    {
        $schools = SchoolInformation::get();
        return count($schools);
    }
}
if (!function_exists('schoolList')) {
    function schoolList()
    {
        return (new CommanRepository())->getAllSchool();
    }
}
