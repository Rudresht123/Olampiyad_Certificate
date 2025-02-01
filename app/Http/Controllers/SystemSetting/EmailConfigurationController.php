<?php

namespace App\Http\Controllers\SystemSetting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SystemSetting\EmailConfigurationModel;
use App\Repositories\MasterAdmin\SystemSettingRepository;
class EmailConfigurationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $email=(new SystemSettingRepository())->getEmailsTemplate();
       if($email){
        return view('admin_panel.EmailTemplate.emailconfig',compact('email'));
       }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
