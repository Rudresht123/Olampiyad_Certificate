<?php
use App\Models\GlobalSetting\SchoolInformation;

if (!function_exists('schoolCount')) {
    function schoolCount()
    {
        $schools = SchoolInformation::get();
        return count($schools);
    }
}
