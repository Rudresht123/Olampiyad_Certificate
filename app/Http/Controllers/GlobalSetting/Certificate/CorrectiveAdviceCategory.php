<?php

namespace App\Http\Controllers\GlobalSetting\Certificate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\GlobalSetting\MasterSetting\CorrectiveAdviceCategoryRequest;
use App\Models\GlobalSetting\CorrectiveAdviceCategoryModel;
use App\Repositories\MasterAdmin\CommanRepository;

class CorrectiveAdviceCategory extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categoriyes=(new CommanRepository())->getAllCategoryes();
        return view('admin_panel.module.globalsetting.MasterAdmin.corrective-advice-category',compact('categoriyes'));
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
    public function store(CorrectiveAdviceCategoryRequest $request)
    {
        if(CorrectiveAdviceCategoryModel::create($request->validated()))
        {
            return back()->with(['success'=>'Corrective Advice Category Record Saved Successfully !']);
        }
        else{
            return back()->with(['error'=>'Corrective Advice Category Record Not Saved Successfully !']);
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
        $correctiveadvice=CorrectiveAdviceCategoryModel::find($id);
        return view('admin_panel.module.globalsetting.MasterAdmin.Edit.edit_corrective_advice_category',compact('correctiveadvice'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CorrectiveAdviceCategoryRequest $request, string $id)
    {
        $correctiveadvice=CorrectiveAdviceCategoryModel::find($id);
        if($correctiveadvice->update($request->validated()))
        {
            return back()->with(['success'=>'Corrective Advice Category Record Updated Successfully !']);
        }
        else{
            return back()->with(['error'=>'Corrective Advice Category Record Not Updated Successfully !']);
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
