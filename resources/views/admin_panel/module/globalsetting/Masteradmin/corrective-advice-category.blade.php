<!-- exteinding master layout here -->
@extends('admin_panel.comman.masterLayout')
<!-- exteinding master layout here -->

<!-- model section start here -->
@section('ModelTitle','Add New Corrective Adivce Category')
@section('ModelTitleInfo','Manage Certificate Setting')
@section('EditModelTitle','Edit Corrective Adivce Category')
@section('EditModelTitleInfo','Manage Certificate Setting')
@section('ModelSize', 'modal-lg')
@section('AddModelPage')
    @include('admin_panel.module.globalsetting.Masteradmin.Add.add-corrective-advice')
@endsection

@section('main-content')
{{-- main section start here --}}

@if ($errors->any())
 
        @foreach ($errors->all() as $error)
           alert('{{ $error }}');
        @endforeach
@endif



{{-- table section satrt here --}}
<nav aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-style1 mg-b-10">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item" aria-current="page">Global Setting</li>
        <li class="breadcrumb-item" aria-current="page">Certificate Setting</li>
        <li class="breadcrumb-item active" aria-current="page">Corrective-Advice-Category</li>
    </ol>
</nav>

<div class="custom-card col-lg-12 mx-auto">
    <div class="panel panel-default">
        <div class="panel-heading"><b><i class="fa fa-list"></i> School</b></div>
        <div class="panel-body pd-b-0 row">
            <div class="col-lg-2">
            @include('admin_panel.layouts.actionbutton.ActionButton')
            </div>
            <div class="col-lg-10 vhr">
            <table id="example2" class="table datatable table-bordered dataTable example2" >
                    <thead class="bg-light fw-bold">
                        <tr class="py-3">
                            <th class="fw-bold">Sr. No.</th>
                            <th class="fw-bold">Category Name</th>
                            <th class="fw-bold">Sequence</th>
                            <th class="fw-bold">Description</th>
                            <th class="fw-bold">Is-Active</th>
                        </tr>
                    </thead>
                    <tbody>
                   @foreach($categoriyes as $category)
                   <tr editUrl="{{route('admin.global-setting.edit.corrective-advice.category',$category->id)}}" deleteurl="{{ route('RecordDelete', ['id' => $category->id, 'table_name' => 'corrective_advice_category']) }}">
                    <td>{{$loop->iteration}}</td>
                    <td>{{$category->category_name ?? ''}}</td>
                    <td>{{$category->position ?? ''}}</td>
                    <td>{{$category->description ?? ''}}</td>
                    <td class="text-center">{!! $category->is_active == 'yes' ? '<span class="badge text-bg-success">Active</span>
                                ' : '<span class="badge text-bg-danger">In-Active</span>'
                                !!}</td>
                   </tr>
                   @endforeach
                    </tbody>
                      </table>
            </div>
        </div>
        </div>

</div>
</div>


</div>
{{-- table section satrt here --}}
@endsection