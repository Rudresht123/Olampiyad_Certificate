<?php

namespace App\Http\Controllers\GlobalSetting;

use App\Http\Controllers\Controller;
use App\Repositories\MasterAdmin\CommanRepository;
use Illuminate\Http\Request;

class CustomController extends Controller
{
    public function getCourse($id){
        $courses=(new CommanRepository())->getCourseDropDown($id);
        return response()->json($courses);
    }
}
