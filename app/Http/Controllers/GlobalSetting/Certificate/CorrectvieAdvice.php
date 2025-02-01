<?php

namespace App\Http\Controllers\GlobalSetting\Certificate;

use App\Http\Controllers\Controller;
use App\Repositories\MasterAdmin\CommanRepository;
use Illuminate\Http\Request;
use App\Http\Requests\GlobalSetting\MasterSetting\CorrectiveAdviceRequest;
use App\Models\GlobalSetting\CorrectiveAdviceModel;

class CorrectvieAdvice extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $correctivecategorys=(new CommanRepository())->getAllCategorye();
        $correctiveadvices=(new CommanRepository())->getAllCorrectiveAdvices();
        return view('admin_panel.module.globalsetting.MasterAdmin.corrective-advice',compact('correctivecategorys','correctiveadvices'));
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
    public function store(CorrectiveAdviceRequest $request)
    {
     
        if(CorrectiveAdviceModel::create($request->validated()))
        {
            return back()->with(['success'=>'Corrective Advice Record Saved Successfully !']);
        }
        else{
            return back()->with(['error'=>'Corrective Advice Record Not Saved Successfully !']);
        }
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
        $correctivecategorys=(new CommanRepository())->getAllCategorye();
        $correctiveadvice=CorrectiveAdviceModel::find($id);
        return view('admin_panel.module.globalsetting.MasterAdmin.Edit.edit-corrective-advice',compact('correctiveadvice','correctivecategorys'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(CorrectiveAdviceRequest $request, string $id)
    {
        $correctiveadvice=CorrectiveAdviceModel::find($id);
       
        if($correctiveadvice->update($request->validated()))
        {
            return back()->with(['success'=>'Corrective Advice Record Saved Successfully !']);
        }
        else{
            return back()->with(['error'=>'Corrective Advice Record Not Saved Successfully !']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
